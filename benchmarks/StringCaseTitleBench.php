<?php

namespace Kusabi\Native\Benchmarks;

class StringCaseTitleBench extends Bench
{
    public function benchCaseTitle()
    {
        str_case_title('Turn this into title case');
    }
}
