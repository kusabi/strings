<?php

namespace Kusabi\Native\Benchmarks;

class StringCasePascalBench extends Bench
{
    public function benchCasePascal()
    {
        str_case_pascal('Turn this into pascal case');
    }
}
