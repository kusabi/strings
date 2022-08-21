<?php

namespace Kusabi\Native\Benchmarks;

class StringCaseSnakeBench extends Bench
{
    public function benchCaseSnake()
    {
        str_case_snake('Turn this into snake case');
    }
}
