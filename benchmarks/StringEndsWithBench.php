<?php

namespace Kusabi\Native\Benchmarks;

/**
 * @BeforeClassMethods({"setup"})
 */
class StringEndsWithBench extends Bench
{
    protected static $long;

    public static function setup()
    {
        $half = str_repeat('Lorem ipsum dolor sit amet. ', 1000);
        static::$long = $half.'In the middle. '.$half;
    }

    public function benchEndsWithCharacter()
    {
        str_ends_with('Hello world', 'd');
    }

    public function benchEndsWithFail()
    {
        str_ends_with('Hello world', 'howdy');
    }

    public function benchEndsWithMultipleCharacters()
    {
        str_ends_with('Hello world', 'world');
    }

    public function benchEndsWithStart()
    {
        str_ends_with('Hello world', 'Hello');
    }

    public function benchEndsWithSuperLong()
    {
        str_ends_with(static::$long, 'Lorem ipsum dolor sit amet.');
    }

    public function benchEndsWithWholeString()
    {
        str_ends_with('Hello world', 'Hello world');
    }
}
