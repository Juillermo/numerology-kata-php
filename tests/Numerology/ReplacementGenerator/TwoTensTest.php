<?php

namespace Numerology\ReplacementGenerator;

class TwoTensTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $array
     * @param $index
     * @param $expected
     * @dataProvider data
     */
    public function testGenerate($array, $index, $expected)
    {
        $generator = new TwoTens();
        $this->assertEquals($expected, $generator->generate($array, $index));
    }

    /**
     * @return array
     */
    public function data()
    {
        return [
            "position zero" => [
                [1, 2, 3],
                0,
                [10, 10]
            ],
            "position one" => [
                [1, 2, 3],
                1,
                [10, 10]
            ],
            "position three" => [
                [1, 2, 3],
                2,
                [10, 10]
            ]
        ];
    }
}
