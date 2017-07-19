<?php

namespace Numerology;

use Numerology\ReplacementGenerator\AnEqualAmountOfOnesAsTheNumberToTheLeft;
use Numerology\ReplacementGenerator\AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft;
use Numerology\ReplacementGenerator\DoNotReplace;
use Numerology\ReplacementGenerator\TwoTens;

class Replacer
{
    /** @var \Numerology\ReplacementGenerator[] */
    private $generators = [];

    /**
     * @param $array
     * @return array
     */
    public function replace($array)
    {
        $replaced = [];
        foreach ($array as $i => $value) {
            $replacement = $this->getReplacementFor($value)->generate($array, $i);
            $replaced = array_merge($replaced, $replacement);

        }
        return $replaced;
    }

    /**
     * @param $number
     * @param $generator
     */
    public function registerReplacementGenerator($number, $generator)
    {
        $this->generators[$number] = $generator;
    }

    /**
     * @param $value
     * @return \Numerology\ReplacementGenerator
     */
    private function getReplacementFor($value)
    {
        if (array_key_exists($value, $this->generators)) {
            return $this->generators[$value];
        }

        return new DoNotReplace();
    }
}
