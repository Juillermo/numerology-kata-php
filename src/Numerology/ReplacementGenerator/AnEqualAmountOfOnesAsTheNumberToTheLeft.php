<?php

namespace Numerology\ReplacementGenerator;

use Numerology\ReplacementGenerator;

class AnEqualAmountOfOnesAsTheNumberToTheLeft implements ReplacementGenerator
{
    /**
     * @param $array
     * @param $index
     * @return array
     */
    public function generate($array, $index)
    {
        return array_fill(0, $array[$index - 1], 1);
    }
}
