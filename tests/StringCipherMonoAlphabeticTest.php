<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_cipher_mono_alphabetic
 * @group ciphers
 * @group str_cipher_mono_alphabetic
 */
class StringCipherMonoAlphabeticTest extends TestCase
{
    public function provideMonoAlphabetic()
    {
        return [
            [
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'bcdefghijklmnopqrstuvwxyzaBCDEFGHIJKLMNOPQRSTUVWXYZA',
                'bcdefghijklmnopqrstuvwxyzaBCDEFGHIJKLMNOPQRSTUVWXYZA'
            ],
            [
                'What is this?',
                CIPHER_ENGLISH,
                CIPHER_ALBHED,
                'Fryd ec drec?'
            ],
            [
                'ThIs Is A wOrD',
                CIPHER_ENGLISH,
                CIPHER_INVERT,
                'tHiS iS a WoRd'
            ]
        ];
    }

    /**
     * @dataProvider provideMonoAlphabetic
     *
     * @param string $input
     * @param string $alpha
     * @param string $beta
     * @param string $output
     */
    public function testMonoAlphabetic($input, $alpha, $beta, $output)
    {
        $this->assertSame($output, str_cipher_mono_alphabetic($input, $alpha, $beta));
    }

    /**
     * @dataProvider provideMonoAlphabetic
     *
     * @param string $output
     * @param string $alpha
     * @param string $beta
     * @param string $input
     */
    public function testMonoAlphabeticReverse($output, $alpha, $beta, $input)
    {
        $this->assertSame($output, str_cipher_mono_alphabetic($input, $beta, $alpha));
    }
}
