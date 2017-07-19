<?php

namespace Numerology\ReplacementGenerator;

use Numerology\ReplacementGenerator;

class TwoTens implements ReplacementGenerator
{
    /**
     * @param $array
     * @param $index
     * @return array
     */
    public function generate($array, $index)
    {
        return [10, 10];
    }
}
