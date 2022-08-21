<?php

namespace Kusabi\Native\Benchmarks;

class StringCipherMonoAlphabeticBench extends Bench
{
    public function benchCipherMonoAlphabetic1Letter()
    {
        str_cipher_mono_alphabetic('H', CIPHER_ENGLISH, CIPHER_ALBHED);
    }

    public function benchCipherMonoAlphabetic5Letter()
    {
        str_cipher_mono_alphabetic('What?', CIPHER_ENGLISH, CIPHER_ALBHED);
    }

    public function benchCipherMonoAlphabetic10Letter()
    {
        str_cipher_mono_alphabetic('What this?', CIPHER_ENGLISH, CIPHER_ALBHED);
    }
}
