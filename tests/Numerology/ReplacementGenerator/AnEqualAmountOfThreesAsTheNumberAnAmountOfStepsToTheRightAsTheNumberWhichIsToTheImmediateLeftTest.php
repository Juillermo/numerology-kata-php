<?php

namespace Numerology\ReplacementGenerator;

class AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeftTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $array
     * @param $index
     * @param $expected
     * @dataProvider data
     */
    public function testGenerate($array, $index, $expected)
    {
        $generator = new AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft();
        $this->assertEquals($expected, $generator->generate($array, $index));
    }

    /**
     * @return array
     */
    public function data()
    {
        return [
            "zero threes" => [
                [1, 1, 0],
                1,
                []
            ],
            "one three" => [
                [2, 1, 0, 1],
                1,
                [3]
            ],
            "two threes" => [
                [0, 1, 2, 2],
                2,
                [3, 3]
            ],
            "seven threes" => [
                [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                4,
                [3, 3, 3, 3, 3, 3, 3]
            ]
        ];
    }
}
