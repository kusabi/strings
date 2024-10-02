<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_case_pascal
 * @group case
 * @group str_case_pascal
 */
class StringCasePascalTest extends TestCase
{
    public static function provideCases(): array
    {
        return [
            ['simple', 'Simple'],
            ['Simple', 'Simple'],
            ['SIMPLE', 'Simple'],

            ['simple123', 'Simple123'],
            ['Simple123', 'Simple123'],
            ['SIMPLE123', 'Simple123'],

            ['simpleTest', 'SimpleTest'],
            ['SimpleTest', 'SimpleTest'],
            ['simpleTEST', 'SimpleTest'],
            ['SIMPLETest', 'SimpleTest'],

            ['simple123Test', 'Simple123Test'],
            ['Simple123Test', 'Simple123Test'],
            ['simple123TEST', 'Simple123Test'],
            ['SIMPLE123Test', 'Simple123Test'],

            ['simpleXML', 'SimpleXml'],
            ['SimpleXML', 'SimpleXml'],
            ['SimpleXml', 'SimpleXml'],

            ['aTest', 'ATest'],
            ['ATest', 'ATest'],
            ['ATeSt', 'ATeSt'],

            ['beginningMiddleEnd', 'BeginningMiddleEnd'],
            ['BeginningMiddleEnd', 'BeginningMiddleEnd'],
            ['BeginningMIDDLEEnd', 'BeginningMiddleEnd'],
            ['BEGINNINGMiddleEnd', 'BeginningMiddleEnd'],
            ['BEGINNINGMiddleEND', 'BeginningMiddleEnd'],

            ['fromCamelCaseFormat', 'FromCamelCaseFormat'],
            ['from-kebab-case-format', 'FromKebabCaseFormat'],
            ['FromPascalCaseFormat', 'FromPascalCaseFormat'],
            ['From sentence case format', 'FromSentenceCaseFormat'],
            ['from_snake_case_format', 'FromSnakeCaseFormat'],
            ['From Title Case Format', 'FromTitleCaseFormat'],
        ];
    }

    /**
     * @dataProvider provideCases
     *
     * @param string $from
     * @param string $to
     */
    public function testCases(string $from, string $to)
    {
        $this->assertSame($to, str_case_pascal($from));
    }
}
