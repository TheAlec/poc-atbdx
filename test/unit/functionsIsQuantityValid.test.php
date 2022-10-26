<?php
declare(strict_types=1);

require_once __DIR__ . '/../../functions/isQuantityValid.php';

use PHPUnit\Framework\TestCase;

final class functionsIsQuantityValid extends TestCase
{
    public function testQuantityShouldBePositiveInteger(): void
    {
        // GIVEN
        $input = 1;
        // WHEN
        $result = isQuantityValid($input);
        // THEN
        $this->assertTrue($result);
    }

    public function testQuantityShouldNotBeText(): void
    {
        // GIVEN
        $input = "test";
        // WHEN
        $result = isQuantityValid($input);
        // THEN
        $this->assertFalse($result);
    }

    public function testQuantityShouldNotBeFloat(): void
    {
        // GIVEN
        $input = 1.2;
        // WHEN
        $result = isQuantityValid($input);
        // THEN
        $this->assertFalse($result);
    }
}
