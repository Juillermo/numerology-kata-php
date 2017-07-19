<?php

namespace Numerology;

interface ReplacementGenerator
{
    /**
     * @param $array
     * @param $index
     * @return array
     */
    public function generate($array, $index);
}