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
    public function provideCases()
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
            ['FromPascalCaseFormat', 'FromPascalCaseFormat'],
            ['from_snake_case_format', 'FromSnakeCaseFormat'],
            ['from-kebab-case-format', 'FromKebabCaseFormat'],
        ];
    }

    /**
     * @dataProvider provideCases
     *
     * @param string $from
     * @param string $to
     */
    public function testCases($from, $to)
    {
        $this->assertSame($to, str_case_pascal($from));
    }
}
