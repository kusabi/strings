<?php

namespace Kusabi\Native\Benchmarks;

class StringCaseCamelBench extends Bench
{
    public function benchCaseCamel()
    {
        str_case_camel('Turn this into camel case');
    }
}
