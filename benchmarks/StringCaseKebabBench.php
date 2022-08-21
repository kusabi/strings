<?php

namespace Kusabi\Native\Benchmarks;

class StringCaseKebabBench extends Bench
{
    public function benchCaseKebab()
    {
        str_case_kebab('Turn this into kebab case');
    }
}
