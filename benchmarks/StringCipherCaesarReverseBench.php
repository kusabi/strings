<?php

namespace Kusabi\Native\Benchmarks;

class StringCipherCaesarReverseBench extends Bench
{
    public function benchCipherCaesarReverse1Character1Jump()
    {
        str_cipher_caesar_reverse('A', 1);
    }

    public function benchCipherCaesarReverse1Character5Jump()
    {
        str_cipher_caesar_reverse('A', 5);
    }

    public function benchCipherCaesarReverse5Character1Jump()
    {
        str_cipher_caesar_reverse('Hello', 1);
    }

    public function benchCipherCaesarReverse5Character5Jump()
    {
        str_cipher_caesar_reverse('Hello', 5);
    }
}
