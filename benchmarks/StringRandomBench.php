<?php

namespace Kusabi\Native\Benchmarks;

class StringRandomBench extends Bench
{
    public function benchRandomShort()
    {
        str_random(5);
    }

    public function benchRandomLong()
    {
        str_random(100);
    }
}
