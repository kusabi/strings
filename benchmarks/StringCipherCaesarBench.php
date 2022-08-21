<?php

namespace Kusabi\Native\Benchmarks;

class StringCipherCaesarBench extends Bench
{
    public function benchCipherCaesar1Character1Jump()
    {
        str_cipher_caesar('A', 1);
    }

    public function benchCipherCaesar1Character5Jump()
    {
        str_cipher_caesar('A', 5);
    }

    public function benchCipherCaesar5Character1Jump()
    {
        str_cipher_caesar('Hello', 1);
    }

    public function benchCipherCaesar5Character5Jump()
    {
        str_cipher_caesar('Hello', 5);
    }
}
