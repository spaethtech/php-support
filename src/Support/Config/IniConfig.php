<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Support\Config;

/**
 * IniConfig
 *
 * @author    Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022, Spaeth Technologies Inc.
 *
 */
class IniConfig extends AbstractConfig
{
    /**
     * @inheritDoc
     */
    protected function allowed(array $info) : bool
    {
        return $info["extension"] == "ini";
    }

    /**
     * @inheritDoc
     */
    protected function parse() : void
    {
        foreach($this->files as $file)
            $this->data[pathinfo($file)["filename"]] = parse_ini_file($file, TRUE);
    }


}
