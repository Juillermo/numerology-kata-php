<?php

namespace Numerology\ReplacementGenerator;

class AnEqualAmountOfOnesAsTheNumberToTheLeftTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $array
     * @param $index
     * @param $expected
     * @dataProvider data
     */
    public function testGenerate($array, $index, $expected)
    {
        $generator = new AnEqualAmountOfOnesAsTheNumberToTheLeft();
        $this->assertEquals($expected, $generator->generate($array, $index));
    }

    /**
     * @return array
     */
    public function data()
    {
        return [
            "zero ones" => [
                [0, 1],
                1,
                []
            ],
            "one one" => [
                [0, 1, 2],
                2,
                [1]
            ],
            "two ones" => [
                [0, 1, 2, 3],
                3,
                [1, 1]
            ],
            "eight ones" => [
                [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                9,
                [1, 1, 1, 1, 1, 1, 1, 1]
            ]
        ];
    }
}
