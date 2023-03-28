<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Support\Config;

/**
 * PhpConfig
 *
 * @author    Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022, Spaeth Technologies Inc.
 *
 */
class PhpConfig extends AbstractConfig
{
    /**
     * @inheritDoc
     */
    protected function allowed(array $info) : bool
    {
        return $info["extension"] == "php";
    }

    /**
     * @inheritDoc
     */
    protected function parse() : void
    {
        foreach($this->files as $file)
            $this->data[pathinfo($file)["filename"]] = require $file;
    }


}
