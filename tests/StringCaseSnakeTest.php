<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_case_snake
 * @group case
 * @group str_case_snake
 */
class StringCaseSnakeTest extends TestCase
{
    public function provideCases()
    {
        return [
            ['simple', 'simple'],
            ['Simple', 'simple'],
            ['SIMPLE', 'simple'],

            ['simple123', 'simple123'],
            ['Simple123', 'simple123'],
            ['SIMPLE123', 'simple123'],

            ['simpleTest', 'simple_test'],
            ['SimpleTest', 'simple_test'],
            ['simpleTEST', 'simple_test'],
            ['SIMPLETest', 'simple_test'],

            ['simple123Test', 'simple123_test'],
            ['Simple123Test', 'simple123_test'],
            ['simple123TEST', 'simple123_test'],
            ['SIMPLE123Test', 'simple123_test'],

            ['simpleXML', 'simple_xml'],
            ['SimpleXML', 'simple_xml'],
            ['SimpleXml', 'simple_xml'],

            ['aTest', 'a_test'],
            ['ATest', 'a_test'],
            ['ATeSt', 'a_te_st'],

            ['beginningMiddleEnd', 'beginning_middle_end'],
            ['BeginningMiddleEnd', 'beginning_middle_end'],
            ['BeginningMIDDLEEnd', 'beginning_middle_end'],
            ['BEGINNINGMiddleEnd', 'beginning_middle_end'],
            ['BEGINNINGMiddleEND', 'beginning_middle_end'],

            ['fromCamelCaseFormat', 'from_camel_case_format'],
            ['FromPascalCaseFormat', 'from_pascal_case_format'],
            ['from_snake_case_format', 'from_snake_case_format'],
            ['from-kebab-case-format', 'from_kebab_case_format'],
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
        $this->assertSame($to, str_case_snake($from));
    }
}
