<?php

namespace Kusabi\Native\Benchmarks;

/**
 * @BeforeClassMethods({"setup"})
 */
class StringContainsBench extends Bench
{
    protected static $long;

    public static function setup()
    {
        $half = str_repeat('Lorem ipsum dolor sit amet. ', 1000);
        static::$long = $half.'In the middle. '.$half;
    }

    public function benchContainsCharacter()
    {
        str_contains('Hello world', 'r');
    }

    public function benchContainsFail()
    {
        str_contains('Hello world', 'howdy');
    }

    public function benchContainsMultipleCharacters()
    {
        str_contains('Hello world', 'llo wo');
    }

    public function benchContainsSuperLong()
    {
        str_contains(static::$long, 'In the middle.');
    }

    public function benchContainsWholeString()
    {
        str_contains('Hello world', 'Hello world');
    }
}
