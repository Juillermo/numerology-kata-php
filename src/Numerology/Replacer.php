<?php

namespace Numerology;

class Replacer
{
    public function replace($array)
    {
        foreach($array as $i => $value){
            switch ($value) {
                case 9:
                    array_splice($array, $i, 1, [10, 10]);
                    break;
                case 2:
                    array_splice($array, $i, 1, $this->fillArray($array[$i - 1], 1));
                    break;
                case 6:
                    array_splice($array, $i, 1, $this->fillArray($array[$i+$array[$i-1]], 3));
                    break;
            }
        }
        return $array;
    }

    /**
     * @param $length
     * @param $value
     * @return array
     */
    private function fillArray($length, $value)
    {
        $array_sub = [];
        for ($j = 0; $j < $length; $j++) {
            $array_sub[] = $value;
        }
        return $array_sub;
    }
}
