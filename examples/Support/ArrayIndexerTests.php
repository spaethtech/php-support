<?php
declare(strict_types=1);

namespace SpaethTech\Common;

use PHPUnit\Framework\TestCase;
use SpaethTech\Support\ArrayIndexer;
use SpaethTech\Support\Exceptions\ArrayTraversalException;

final class ArrayIndexerTests extends TestCase
{
    private $sample;



    protected function setUp(): void
    {
        $this->sample = [

            "author" => "Ryan Spaeth",
            "email" => "rspaeth@spaethtech.com",

            "dev" => [
                "version" => "1.0.0-beta1",
                "keywords" => [
                    "testing",
                    "beta",
                    "development",
                ],
            ],

            "prod" => [
                "version" => "1.0.0",
                "keywords" => [
                    "master",
                    "stable",
                    "production",
                ],
            ],
        ];
    }

    #region GetByDotNotation()

    /**
     * @throws ArrayTraversalException
     */
    public function testGetByDotNotationWhenEntryExists(): void
    {
        $indexer = new ArrayIndexer($this->sample);
        $this->assertEquals("1.0.0", $indexer->getByDotNotation("prod.version"));
    }

    /**
     * @throws ArrayTraversalException
     */
    public function testGetByDotNotationWhenEntryDoesNotExist(): void
    {
        $this->expectException(ArrayTraversalException::class);

        $indexer = new ArrayIndexer($this->sample);
        $indexer->getByDotNotation("product.versions");
    }

    /**
     * @throws ArrayTraversalException
     */
    public function testGetByDotNotationWhenEntryDoesNotExistButDefaultProvided(): void
    {
        $indexer = new ArrayIndexer($this->sample);
        $this->assertEquals("1.1.0", $indexer->getByDotNotation("product.versions", "1.1.0"));
    }

    #endregion

    #region SetByDotNotation()

    public function testSetByDotNotation(): void
    {
        $indexer = new ArrayIndexer($this->sample);
        $indexer->setByDotNotation("author.name", "Ryan Spaeth");
        $indexer->setByDotNotation("author.email", "rspaeth@spaethtech.com");

        $this->sample = $indexer->toArray();

        $this->assertEquals([ "name" => "Ryan Spaeth", "email" => "rspaeth@spaethtech.com" ], $this->sample["author"]);
    }

    #endregion



}
