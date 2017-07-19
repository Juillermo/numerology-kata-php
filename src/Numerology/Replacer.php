<?php

namespace Numerology;

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
                    $replacement = $this->fillArray($array[$i - 1], 1);
                    break;
                case 6:
                    $replacement = $this->fillArray($array[$i + $array[$i - 1]], 3);
                    break;
                default:
                    $replacement = [$value];
                    break;
            }
            $replaced = array_merge($replaced, $replacement);

        }
        return $replaced;
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
