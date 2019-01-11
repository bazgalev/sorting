<?php

class Sort
{
    /**
     * Sort via bubble sorting
     *
     * @param array $array
     * @param bool $byAsc
     * @return array
     */
    static function byBubble(array $array, bool $byAsc = true): array
    {
        $size = count($array);

        for ($i = 0; $i < $size; $i++) {
            for ($j = $i + 1; $j < $size; $j++) {
                if ($byAsc) {
                    if ($array[$j] < $array[$i]) {
                        self::swap($array[$i], $array[$j]);
                    }
                } else {
                    if ($array[$j] > $array[$i]) {
                        self::swap($array[$i], $array[$j]);
                    }
                }
            }
        }

        return $array;
    }

    /**
     * Swapping $a and $b
     *
     * @param $a
     * @param $b
     */
    static private function swap(&$a, &$b): void
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    static private function min(array $array)
    {
        $min=$array[0];

        foreach($array as $item){
            if($item<$min){
                $min=$item;
            }
        }

        return $min;
    }
}
