<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_starts_with
 * @group src
 * @group strings
 * @group queries
 * @group str_starts_with
 */
class StringStartsWithTest extends TestCase
{
    public function testStartsWithCaseSensitive()
    {
        $this->assertFalse(str_starts_with('Hello world', 'hello'));
    }

    public function testStartsWithCharacter()
    {
        $this->assertTrue(str_starts_with('Hello world', 'H'));
    }

    public function testStartsWithFail()
    {
        $this->assertFalse(str_starts_with('Hello world', 'd'));
    }

    public function testStartsWithNothing()
    {
        $this->assertTrue(str_starts_with('Hello world', ''));
    }

    public function testStartsWithWhole()
    {
        $this->assertTrue(str_starts_with('Hello world', 'Hello world'));
    }

    public function testStartsWithWord()
    {
        $this->assertTrue(str_starts_with('Hello world', 'Hello'));
    }
}
