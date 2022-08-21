<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_random
 * @group src
 * @group strings
 * @group generation
 * @group str_random
 */
class StringRandomTest extends TestCase
{
    public function testAlphabet()
    {
        $alphabets = [
            CIPHER_ENGLISH,
            'howdy',
            '1234',
        ];
        foreach ($alphabets as $alphabet) {
            $result = str_random(10, $alphabet);
            foreach (str_split($result) as $character) {
                $this->assertTrue(strpos($alphabet, $character) !== false);
            }
        }

        $this->assertSame('!!!!!!!!!!', str_random(10, '!'));
    }

    public function testLength()
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertSame($i, strlen(str_random($i)));
        }
    }
}
