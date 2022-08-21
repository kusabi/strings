<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_cipher_caesar
 * @covers \str_cipher_caesar_reverse
 * @group ciphers
 * @group str_cipher_caesar
 */
class StringCipherCaesarTest extends TestCase
{
    public function provideCaesar()
    {
        return [
            [
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                1,
                'bcdefghijklmnopqrstuvwxyzaBCDEFGHIJKLMNOPQRSTUVWXYZA'
            ],
            [
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                25,
                'zabcdefghijklmnopqrstuvwxyZABCDEFGHIJKLMNOPQRSTUVWXY'
            ],
            [
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                26,
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
            ],
            [
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                27,
                'bcdefghijklmnopqrstuvwxyzaBCDEFGHIJKLMNOPQRSTUVWXYZA'
            ],
            [
                'The quick brown fox jumps over the lazy dog',
                3,
                'Wkh txlfn eurzq ira mxpsv ryhu wkh odcb grj'
            ],
            [
                'aaa!£$%^&*()_+-=bbb',
                1,
                'bbb!£$%^&*()_+-=ccc'
            ],
            [
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                -1,
                'zabcdefghijklmnopqrstuvwxyZABCDEFGHIJKLMNOPQRSTUVWXY'
            ],
        ];
    }

    /**
     * @dataProvider provideCaesar
     *
     * @param string $input
     * @param int $shift
     * @param string $output
     */
    public function testCaesar($input, $shift, $output)
    {
        $this->assertSame($output, str_cipher_caesar($input, $shift));
    }

    /**
     * @dataProvider provideCaesar
     *
     * @param string $output
     * @param int $shift
     * @param string $input
     */
    public function testCaesarReverse($output, $shift, $input)
    {
        $this->assertSame($output, str_cipher_caesar_reverse($input, $shift));
    }
}
