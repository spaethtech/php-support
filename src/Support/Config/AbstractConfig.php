<?php /** @noinspection PhpUnused, PhpUnusedParameterInspection */
declare(strict_types=1);

namespace SpaethTech\Support\Config;

//use Illuminate\Support\Arr;
//use Illuminate\Support\Str;
use SpaethTech\Support\Arrays;
use SpaethTech\Support\Strings;

/**
 * AbstractConfig
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022, Spaeth Technologies Inc.
 *
 * TODO: Add the ability to have recursive folder config branches!
 */
abstract class AbstractConfig
{
    /**
     * A list of all files found at the given configuration path.
     *
     * @var string[]
     */
    protected array $files = [];

    /**
     * An associative array representing the parsed configuration data.
     *
     * @var array
     */
    protected array $data = [];

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        if (!file_exists($path))
            //throw new Exceptions\FileNotFoundException("Config file or folder does not exist!");
            return;

        if (is_dir($path))
        {
            foreach (scandir($path) as $file)
            {
                if ($file == "." || $file == "..")
                    continue;

                //$full = basename($file);
                //$name = Str::beforeLast($full, ".");
                //$ext  = Str::afterLast($full, ".");

                $real = realpath("$path/$file");

                if (!$this->allowed(pathinfo($real)))
                    continue;

                $this->files[] = $real;
            }
        }
        else
        {
            $this->files[] = realpath($path);
        }

        $this->parse();
    }

    /**
     * The abstract method that is called during file/folder iteration to exclude certain files.
     */
    abstract protected function allowed(array $info): bool;

    /**
     * The abstract method that is called when parsing the configuration file into an associative array.
     */
    abstract protected function parse(): void;

    /**
     * Gets the value of the configuration data at the given key.
     *
     * @param string $key   The key or "." delimited path to use when indexing into the array.
     *
     * @return mixed        Returns the value at the given index.
     */
    public function get(string $key)
    {
        return Arrays::get($this->data, $key, ".");
        //return $test; // Arrays::path($this->data, $key, ".");
        //return Arr::get($this->data, $key);
    }

    /**
     * Sets the value of the configuration data at the given path.
     *
     * @param string $key   The key or "." delimited path to use when indexing into the array.
     * @param mixed $value  The value to assign at the given index.
     *
     * @return array        Returns the same array, to provide method chaining.
     */
    public function set(string $key, $value) : array
    {
        return Arrays::set($this->data, $key, $value);
        //return Arr::set($this->data, $key, $value);
    }

    /**
     * @param string   $extension
     * @param callable $handler
     *
     * @return void
     */
    protected function filter(string $extension, callable $handler): void
    {
        foreach($this->files as $file)
        {
            $full = basename($file);
            //$name = Str::beforeLast($full, ".");
            $name = Strings::beforeLast($full, ".");
            //$ext  = Str::afterLast($full, ".");
            $ext  = Strings::afterLast($full, ".");

            if($ext !== $extension)
                continue;

            $this->data[$name] = parse_ini_file($file, TRUE);
        }


    }

}
