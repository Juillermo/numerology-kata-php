<?php

namespace Numerology\ReplacementGenerator;

use Numerology\ReplacementGenerator;

class DoNotReplace implements ReplacementGenerator
{
    /**
     * @param $array
     * @param $index
     * @return array
     */
    public function generate($array, $index)
    {
        return array_fill(0, 1, $array[$index]);
    }
}
