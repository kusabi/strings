<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_contains
 * @group queries
 * @group str_contains
 */
class StringContainsTest extends TestCase
{
    public function testContainsCaseSensitive()
    {
        $this->assertFalse(str_contains('Hello world', 'World'));
    }

    public function testContainsCharacter()
    {
        $this->assertTrue(str_contains('Hello world', 'w'));
    }

    public function testContainsEmptyString()
    {
        $this->assertTrue(str_contains('Hello world', ''));
    }

    public function testContainsFail()
    {
        $this->assertFalse(str_contains('Hello world', 'not here'));
    }

    public function testContainsWhole()
    {
        $this->assertTrue(str_contains('Hello world', 'Hello world'));
    }

    public function testContainsWord()
    {
        $this->assertTrue(str_contains('Hello world', 'world'));
    }
}
