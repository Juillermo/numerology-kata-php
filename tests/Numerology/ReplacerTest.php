<?php

namespace Numerology;

use Numerology\ReplacementGenerator\AnEqualAmountOfOnesAsTheNumberToTheLeft;
use Numerology\ReplacementGenerator\AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft;
use Numerology\ReplacementGenerator\TwoTens;

class ReplacerTest extends \PHPUnit_Framework_TestCase
{
    public function testDoesNotReplace()
    {
        $replacer = new Replacer();
        self::assertEquals([1], $replacer->replace([1]));
        self::assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], $replacer->replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
    }

    public function testReplacesNineWithTwoTens()
    {
        $replacer = new Replacer();
        $replacer->registerReplacementGenerator(9, new TwoTens());
        self::assertEquals([10, 10], $replacer->replace([9]));
        self::assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 10, 10, 10], $replacer->replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
    }

    public function testReplacesTwosWithOnes()
    {
        $replacer = new Replacer();
        $replacer->registerReplacementGenerator(2, new AnEqualAmountOfOnesAsTheNumberToTheLeft());
        self::assertEquals([1, 1], $replacer->replace([1, 2]));
        self::assertEquals([1, 1, 3, 4, 5, 6, 7, 8, 9, 10], $replacer->replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
    }

    public function testReplacesSixesWithThrees()
    {
        $replacer = new Replacer();
        $replacer->registerReplacementGenerator(6,
            new AnEqualAmountOfThreesAsTheNumberAnAmountOfStepsToTheRightAsTheNumberWhichIsToTheImmediateLeft());
        self::assertEquals([1, 3 ,1], $replacer->replace([1, 6, 1]));
        self::assertEquals([1, 2, 3, 5, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 7, 8, 9, 10], $replacer->replace([1, 2, 3, 5, 4, 6, 7, 8, 9, 10]));
    }
}
