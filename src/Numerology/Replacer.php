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
                    $array_sub = $this->fillArray($array[$i - 1], 1);
                    array_splice($array, $i, 1, $array_sub);
                    break;

                case 6:
                    $array_sub = $this->fillArray($array[$i+$array[$i-1]], 3);
                    array_splice($array, $i, 1, $array_sub);
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
