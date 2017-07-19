<?php

namespace Numerology;

class AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft
{
    /**
     * @param $array
     * @param $index
     * @return array
     */
    public function generate($array, $index)
    {
        return array_fill(0, $array[$index + $array[$index - 1]], 3);
    }
}
