<?php

namespace Numerology;

use Numerology\ReplacementGenerator\AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft;

class Replacer
{
    public function replace($array)
    {
        $replaced = [];
        foreach($array as $i => $value){
            switch ($value) {
                case 9:
                    $replacement = [10, 10];
                    break;
                case 2:
                    $replacement =  array_fill(0, $array[$i - 1], 1);
                    break;
                case 6:
                    $replacementGenerator = new AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft();
                    $replacement = $replacementGenerator->generate($array, $i);
                    break;
                default:
                    $replacement = [$value];
                    break;
            }
            $replaced = array_merge($replaced, $replacement);

        }
        return $replaced;
    }
}
