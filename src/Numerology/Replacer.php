<?php

namespace Numerology;

class Replacer
{
    public function replace($array)
    {
        foreach($array as $i => $value){
            switch ($value) {
                case 9:
                    $replacement = [10, 10];
                    $array = $this->replacePositionWith($array, $i, $replacement);
                    break;
                case 2:
                    $replacement = $this->fillArray($array[$i - 1], 1);
                    $array = $this->replacePositionWith($array, $i, $replacement);
                    break;
                case 6:
                    $replacement = $this->fillArray($array[$i + $array[$i - 1]], 3);
                    $array = $this->replacePositionWith($array, $i, $replacement);
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

    /**
     * @param array $array
     * @param int $i
     * @param array $replacement
     * @return array
     */
    private function replacePositionWith($array, $i, $replacement)
    {
        array_splice($array, $i, 1, $replacement);
        return $array;
    }
}
