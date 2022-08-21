<?php

namespace Kusabi\Native\Benchmarks;

/**
 * @BeforeClassMethods({"setup"})
 */
class StringStartsWithBench extends Bench
{
    protected static $long;

    public static function setup()
    {
        $half = str_repeat('Lorem ipsum dolor sit amet. ', 1000);
        static::$long = $half.'In the middle. '.$half;
    }

    public function benchStartsWithCharacter()
    {
        str_starts_with('Hello world', 'H');
    }

    public function benchStartsWithEnding()
    {
        str_starts_with('Hello world', 'world');
    }

    public function benchStartsWithFail()
    {
        str_starts_with('Hello world', 'howdy');
    }

    public function benchStartsWithMultipleCharacters()
    {
        str_starts_with('Hello world', 'Hello');
    }

    public function benchStartsWithSuperLong()
    {
        str_starts_with(static::$long, 'Lorem ipsum dolor sit amet.');
    }

    public function benchStartsWithWholeString()
    {
        str_starts_with('Hello world', 'Hello world');
    }
}
