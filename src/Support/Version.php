<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Support;

use InvalidArgumentException;

/**
 * Class Version
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 */
final class Version
{
    protected const REGEX_VERSION = "/^(?<major>\d+)\.(?<minor>\d+)(?:.(?<build>\d+))?(?:-(?<release>.*))?$/";

    public int $major;
    public int $minor;
    public int $build;
    public string $release;

    public function __construct(string $version)
    {
        if(!preg_match(self::REGEX_VERSION, $version, $parts, PREG_UNMATCHED_AS_NULL))
            throw new InvalidArgumentException("Version could not be parsed!");

        $parts = array_filter($parts, "is_string", ARRAY_FILTER_USE_KEY);

        $this->major    = (int)($parts["major"] ?? -1);
        $this->minor    = (int)($parts["minor"] ?? -1);
        $this->build    = (int)($parts["build"] ?? -1);
        $this->release  = ($parts["release"]    ?? "");
    }

    public function __toString()
    {
        $parts = [];

        if ($this->major >= 0)  $parts[] = $this->major;
        if ($this->minor >= 0)  $parts[] = $this->minor;
        if ($this->build >= 0)  $parts[] = $this->build;

        return join(".", $parts) . ($this->release !== "" ? "-$this->release" : "");
    }
}
