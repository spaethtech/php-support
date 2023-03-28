<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Support;

use Symfony\Component\Console\Output\OutputInterface;

class Process
{
    protected const DEFAULT_DESCRIPTORS = [
        0 => array("pipe", "r"),
        1 => array("pipe", "w"),
        2 => array("pipe", "w"),
    ];

    protected const DEFAULT_PRINT_PREFIX = " [EXEC]";

    /**
     * @var array|string
     */
    protected $command = "";

    protected array $descriptors;



    protected ?array $pipes = NULL;

    protected float $startTime = 0;
    protected float $endTime = 0;

    /**
     * @var false|string $stdout
     */
    protected $stdout;

    /**
     * @var false|string $stderr
     */
    protected $stderr;




    /**
     * @var false|resource
     */
    protected $resource;

    protected int $exitCode;

    //protected ?int $exitCode = NULL;

    protected ?OutputInterface $output = NULL;

    protected ?string $printPrefix = self::DEFAULT_PRINT_PREFIX;


    /**
     * @param array|string $command
     * @param array $descriptors
     */
    function __construct($command, array $descriptors = self::DEFAULT_DESCRIPTORS)
    {
        $this->command = $command;
        $this->descriptors = $descriptors;
    }

    /**
     * @param string $command
     * @param string|null $cwd
     * @param array|null $env
     * @param array|null $options
     *
     * @return int
     */
    public function execute(?string $cwd = NULL, ?array $env = NULL, ?array $options = NULL): int
    {
        $this->startTime = microtime(TRUE);

        $this->resource = proc_open($this->command, $this->descriptors, $this->pipes, $cwd, $env, $options);

        $this->stdout = stream_get_contents($this->pipes[1]);
        fclose($this->pipes[1]);
        $this->stderr = stream_get_contents($this->pipes[2]);
        fclose($this->pipes[2]);
        $this->exitCode = proc_close($this->resource);

        $this->endTime = microtime(TRUE);

        return $this->exitCode;
    }

    public function getOutput(bool $compact = false, ?callable $filter = NULL): array
    {
        $stdout = ($this->stdout === false || $this->stdout === "")
            ? []
            : explode("\n", $this->stdout);

        if ($compact)
            $stdout = array_filter($stdout);

        if ($filter)
            $stdout = array_filter($stdout, $filter);

        return $stdout;
    }

    public function getError(bool $compact = false, ?callable $filter = NULL): array
    {
        $stderr = ($this->stderr === false || $this->stderr === "")
            ? []
            : explode("\n", $this->stderr);

        if ($compact)
            $stderr = array_filter($stderr);

        if ($filter)
            $stderr = array_filter($stderr, $filter);

        return $stderr;
    }

    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function setPrintPrefix(string $prefix)
    {
        $this->printPrefix = $prefix;
    }

    public function printOutput()
    {
        if($this->output === null)
            return;

        $padding = $this->getPadding();

        foreach ($this->getOutput() as $line)
            $this->output->writeln("$padding $line");

        foreach ($this->getError() as $line)
            $this->output->writeln("$padding <bg=red>$line</>");
    }

    public function getPadding()
    {
        return join("", array_fill(0, strlen($this->printPrefix), " "));
    }

    /**
     * @param bool $multiline
     *
     * @return string
     */
    public function printCommand(bool $multiline = false): string
    {
        if($this->output === null)
            return "";

        $padding = join("", array_fill(0, strlen($this->printPrefix), " "));

        if (is_array($this->command))
        {
            if (count($this->command) === 0)
                return "";

            if (count($this->command) === 1)
            {
                $this->output->writeln("<fg=cyan>$this->printPrefix ${this->command[0]}</>");
                return $this->command[0];
            }

            if (!$multiline)
            {
                $joined = join(" ", $this->command);
                $this->output->writeln("<fg=cyan>$this->printPrefix $joined</>");
                return $joined;
            }

            $this->output->writeln("<fg=cyan>$this->printPrefix ${this->command[0]}</>");
            for($i = 1; $i < count($this->command); $i++)
                $this->output->writeln("<fg=cyan>$padding ${this->command[$i]}</>");

            return join(" ", $this->command);
        }

        $this->output->writeln("<fg=cyan>$this->printPrefix $this->command</>");
        return $this->command;
    }

//    public function isRunning()
//    {
//        $status = proc_get_status($this->resource);
//
//        /**
//         * proc_get_status will only pull valid exitcode one
//         * time after process has ended, so cache the exitcode
//         * if the process is finished and $exitcode is uninitialized
//         */
//        if ($status["running"] === FALSE && $this->exitCode === NULL)
//            $this->exitCode = $status["exitcode"];
//
//        return $status["running"];
//    }

    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }

    public function getElapsedTime(): float
    {
        return $this->endTime - $this->startTime;
    }
}
