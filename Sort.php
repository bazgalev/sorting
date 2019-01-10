<?php

namespace Pazgalev\Sorting\Sort {

    class Sort
    {
        static function byBubble(array $array)
        {
            $size = count($array);

            for ($i = 0; $i < $size; $i++) {
                for ($j = $i + 1; $j < $size; $j++) {
                    if ($array[$j] < $array[$i]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }

            return $array;
        }
    }
}