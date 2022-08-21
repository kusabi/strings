<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_case_camel
 * @group src
 * @group strings
 * @group case
 * @group str_camel_case
 */
class StringCaseCamelTest extends TestCase
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

            ['simpleTest', 'simpleTest'],
            ['SimpleTest', 'simpleTest'],
            ['simpleTEST', 'simpleTest'],
            ['SIMPLETest', 'simpleTest'],

            ['simple123Test', 'simple123Test'],
            ['Simple123Test', 'simple123Test'],
            ['simple123TEST', 'simple123Test'],
            ['SIMPLE123Test', 'simple123Test'],

            ['simpleXML', 'simpleXml'],
            ['SimpleXML', 'simpleXml'],
            ['SimpleXml', 'simpleXml'],

            ['aTest', 'aTest'],
            ['ATest', 'aTest'],
            ['ATeSt', 'aTeSt'],

            ['beginningMiddleEnd', 'beginningMiddleEnd'],
            ['BeginningMiddleEnd', 'beginningMiddleEnd'],
            ['BeginningMIDDLEEnd', 'beginningMiddleEnd'],
            ['BEGINNINGMiddleEnd', 'beginningMiddleEnd'],
            ['BEGINNINGMiddleEND', 'beginningMiddleEnd'],

            ['fromCamelCaseFormat', 'fromCamelCaseFormat'],
            ['FromPascalCaseFormat', 'fromPascalCaseFormat'],
            ['from_snake_case_format', 'fromSnakeCaseFormat'],
            ['from-kebab-case-format', 'fromKebabCaseFormat'],
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
        $this->assertSame($to, str_case_camel($from));
    }
}
