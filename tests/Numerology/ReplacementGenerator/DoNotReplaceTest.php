<?php

namespace Numerology\ReplacementGenerator;

class DoNotReplaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $array
     * @param $index
     * @param $expected
     * @dataProvider data
     */
    public function testGenerate($array, $index, $expected)
    {
        $generator = new DoNotReplace();
        $this->assertEquals($expected, $generator->generate($array, $index));
    }

    /**
     * @return array
     */
    public function data()
    {
        return [
            "one" => [
                [1, 2, 3],
                0,
                [1]
            ],
            "two" => [
                [1, 2, 3],
                1,
                [2]
            ],
            "two threes" => [
                [1, 2, 3],
                2,
                [3]
            ]
        ];
    }
}
