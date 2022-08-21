<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_case_sentence
 * @group case
 * @group str_case_sentence
 */
class StringCaseSentenceTest extends TestCase
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

            ['simpleTest', 'Simple test'],
            ['SimpleTest', 'Simple test'],
            ['simpleTEST', 'Simple test'],
            ['SIMPLETest', 'Simple test'],

            ['simple123Test', 'Simple123 test'],
            ['Simple123Test', 'Simple123 test'],
            ['simple123TEST', 'Simple123 test'],
            ['SIMPLE123Test', 'Simple123 test'],

            ['simpleXML', 'Simple xml'],
            ['SimpleXML', 'Simple xml'],
            ['SimpleXml', 'Simple xml'],

            ['aTest', 'A test'],
            ['ATest', 'A test'],
            ['ATeSt', 'A te st'],

            ['beginningMiddleEnd', 'Beginning middle end'],
            ['BeginningMiddleEnd', 'Beginning middle end'],
            ['BeginningMIDDLEEnd', 'Beginning middle end'],
            ['BEGINNINGMiddleEnd', 'Beginning middle end'],
            ['BEGINNINGMiddleEND', 'Beginning middle end'],

            ['fromCamelCaseFormat', 'From camel case format'],
            ['FromPascalCaseFormat', 'From pascal case format'],
            ['from_snake_case_format', 'From snake case format'],
            ['from-kebab-case-format', 'From kebab case format'],
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
        $this->assertSame($to, str_case_sentence($from));
    }
}
