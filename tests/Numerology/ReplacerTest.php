<?php

namespace Numerology;

class ReplacerTest extends \PHPUnit_Framework_TestCase
{
    public function testDoesNotReplaceOnes()
    {
        $replacer = new Replacer();
        self::assertEquals([1], $replacer->replace([1]));
    }

    public function testReplacesNineWithTwoTens()
    {
        $replacer = new Replacer();
        self::assertEquals([10,10], $replacer->replace([9]));
        self::assertEquals([1,3,4,5,7,8,10,10,10], $replacer->replace([1,3,4,5,7,8,9,10]));
    }

    public function testReplacesTwosWithOnes()
    {
        $replacer = new Replacer();
        self::assertEquals([1,1], $replacer->replace([1,2]));
        self::assertEquals([3,1,1,1], $replacer->replace([3,2]));
    }
    public function testReplacesSixesWithThrees()
    {
        $replacer = new Replacer();
        self::assertEquals([3,3,5,1,1], $replacer->replace([3,6,5,1,1]));
        self::assertEquals([3,3,3,3,5,1,3], $replacer->replace([3,6,5,1,3]));
    }
}
