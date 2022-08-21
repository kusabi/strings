<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_case_kebab
 * @group case
 * @group str_case_kebab
 */
class StringCaseKebabTest extends TestCase
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

            ['simpleTest', 'simple-test'],
            ['SimpleTest', 'simple-test'],
            ['simpleTEST', 'simple-test'],
            ['SIMPLETest', 'simple-test'],

            ['simple123Test', 'simple123-test'],
            ['Simple123Test', 'simple123-test'],
            ['simple123TEST', 'simple123-test'],
            ['SIMPLE123Test', 'simple123-test'],

            ['simpleXML', 'simple-xml'],
            ['SimpleXML', 'simple-xml'],
            ['SimpleXml', 'simple-xml'],

            ['aTest', 'a-test'],
            ['ATest', 'a-test'],
            ['ATeSt', 'a-te-st'],

            ['beginningMiddleEnd', 'beginning-middle-end'],
            ['BeginningMiddleEnd', 'beginning-middle-end'],
            ['BeginningMIDDLEEnd', 'beginning-middle-end'],
            ['BEGINNINGMiddleEnd', 'beginning-middle-end'],
            ['BEGINNINGMiddleEND', 'beginning-middle-end'],

            ['fromCamelCaseFormat', 'from-camel-case-format'],
            ['FromPascalCaseFormat', 'from-pascal-case-format'],
            ['from_snake_case_format', 'from-snake-case-format'],
            ['from-kebab-case-format', 'from-kebab-case-format'],
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
        $this->assertSame($to, str_case_kebab($from));
    }
}
