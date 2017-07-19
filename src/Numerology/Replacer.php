<?php

namespace Numerology;

use Numerology\ReplacementGenerator\AnEqualAmountOfOnesAsTheNumberToTheLeft;
use Numerology\ReplacementGenerator\AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft;
use Numerology\ReplacementGenerator\DoNotReplace;
use Numerology\ReplacementGenerator\TwoTens;

class Replacer
{
    public function replace($array)
    {
        $replaced = [];
        foreach($array as $i => $value){
            switch ($value) {
                case 9:
                    $replacementGenerator = new TwoTens();
                    $replacement = $replacementGenerator->generate($array, $i);
                    break;
                case 2:
                    $replacementGenerator = new AnEqualAmountOfOnesAsTheNumberToTheLeft();
                    $replacement =  $replacementGenerator->generate($array, $i);
                    break;
                case 6:
                    $replacementGenerator = new AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft();
                    $replacement = $replacementGenerator->generate($array, $i);
                    break;
                default:
                    $replacementGenerator = new DoNotReplace();
                    $replacement = $replacementGenerator->generate($array, $i);
                    break;
            }
            $replaced = array_merge($replaced, $replacement);

        }
        return $replaced;
    }
}
