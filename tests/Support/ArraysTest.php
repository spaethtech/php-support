<?php
declare(strict_types=1);

namespace Tests\Support;

use PHPUnit\Framework\TestCase;
use SpaethTech\Support\Arrays;

final class ArraysTest extends TestCase
{
    //private array $sample;



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


    #region Validations

    protected ?array $null          = null;

    protected ?array $empty         = [];
    protected ?array $assoc         = [ "a" => 0, "b" => 1 ];
    protected ?array $indexed       = [ 0 => 0, 1 => 1, 3 => 3, 9 => 9 ];

    protected ?array $indexedInt    = [ "0" => 0, "1" => 1, "3" => 3 ];

    protected ?array $sequential    = [ 0 => 0, 1 => 1, 2 => 2, 3 => 3 ];

    protected ?array $sequentialInt = [ "0" => 0, "1" => 1, "2" => 2 ];
    protected ?array $sequentialOrd = [ "a" => 0, "b" => 1, "c" => 2 ];
    protected ?array $sequentialMix = [ "A" => 0, "b" => 1, "C" => 2 ];

    /**
     * @covers Arrays::isNull
     * @return void
     */
    public function testIsNull(): void
    {
        $this->assertTrue(Arrays::isNull($this->null));
        $this->assertNotTrue(Arrays::isNull($this->empty));
        $this->assertNotTrue(Arrays::isNull($this->assoc));
        $this->assertNotTrue(Arrays::isNull($this->indexed));
        $this->assertNotTrue(Arrays::isNull($this->sequential));
    }

    /**
     * @covers Arrays::isEmpty
     * @return void
     */
    public function testIsEmpty(): void
    {
        $this->assertNotTrue(Arrays::isEmpty($this->null));
        $this->assertTrue(Arrays::isEmpty($this->empty));
        $this->assertNotTrue(Arrays::isEmpty($this->assoc));
        $this->assertNotTrue(Arrays::isEmpty($this->indexed));
        $this->assertNotTrue(Arrays::isEmpty($this->sequential));
    }

    /**
     * @covers Arrays::isNullOrEmpty
     * @return void
     */
    public function testIsNullOrEmpty(): void
    {
        $this->assertTrue(Arrays::isNullOrEmpty($this->null));
        $this->assertTrue(Arrays::isNullOrEmpty($this->empty));
        $this->assertNotTrue(Arrays::isNullOrEmpty($this->assoc));
        $this->assertNotTrue(Arrays::isNullOrEmpty($this->indexed));
        $this->assertNotTrue(Arrays::isNullOrEmpty($this->sequential));
    }

    /**
     * @covers Arrays::isAssociative()
     * @return void
     */
    public function testIsAssociative(): void
    {
        $this->assertNotTrue(Arrays::isAssociative($this->null));
        $this->assertNotTrue(Arrays::isAssociative($this->empty));
        $this->assertTrue   (Arrays::isAssociative($this->assoc));
        $this->assertNotTrue(Arrays::isAssociative($this->indexed));
        $this->assertNotTrue(Arrays::isAssociative($this->indexedInt));
        $this->assertNotTrue(Arrays::isAssociative($this->sequential));
        $this->assertNotTrue(Arrays::isAssociative($this->sequentialInt));
        $this->assertTrue   (Arrays::isAssociative($this->sequentialOrd));
    }

    /**
     * @covers Arrays::isIndexed()
     * @return void
     */
    public function testIsIndexed(): void
    {
        $this->assertNotTrue(Arrays::isIndexed($this->null));
        $this->assertNotTrue(Arrays::isIndexed($this->empty));
        $this->assertNotTrue(Arrays::isIndexed($this->assoc));
        $this->assertTrue   (Arrays::isIndexed($this->indexed));
        $this->assertTrue   (Arrays::isindexed($this->indexedInt));
        $this->assertTrue   (Arrays::isIndexed($this->sequential));
        $this->assertTrue   (Arrays::isindexed($this->sequentialInt));
        $this->assertNotTrue(Arrays::isindexed($this->sequentialOrd));
    }

    /**
     * @covers Arrays::isSequential()
     * @return void
     */
    public function testIsSequential(): void
    {
        $this->assertNotTrue(Arrays::isSequential($this->null));
        $this->assertNotTrue(Arrays::isSequential($this->empty));
        $this->assertTrue   (Arrays::isSequential($this->assoc));
        $this->assertNotTrue(Arrays::isSequential($this->indexed));
        $this->assertNotTrue(Arrays::isSequential($this->indexedInt));
        $this->assertTrue   (Arrays::isSequential($this->sequential));
        $this->assertTrue   (Arrays::isSequential($this->sequentialInt));
        $this->assertTrue   (Arrays::isSequential($this->sequentialOrd));
        $this->assertNotTrue(Arrays::isSequential($this->sequentialMix));
    }

    #endregion





}

