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
     * Sort via selection
     *
     * @param array $array
     * @param bool $byAsc on true sorting by asc on false - by desc
     * @return array
     */
    static public function bySelection(array $array, bool $byAsc = true): array
    {
        $size = count($array);

        for ($i = 0; $i < $size; $i++) {

            for ($j = $i; $j < $size; $j++) {
                if ($byAsc) {
                    if ($array[$j] < $array[$i]) {
                        self::swap($array[$j], $array[$i]);
                    }
                } else {
                    if ($array[$j] > $array[$i]) {
                        self::swap($array[$j], $array[$i]);
                    }
                }
            }
        }

        return $array;
    }

    /**
     * Sorting by insertion
     *
     * @param array $array
     * @return array
     */
    static public function byInsertion(array $array): array
    {
        $size = count($array);
        for ($i = 1; $i < $size; $i++) {
            $temp = $array[$i];
            for ($j = $i - 1; $j >= 0 && $array[$j] > $temp; $j--) {
                $array[$j + 1] = $array[$j];
            }
            $array[$j + 1] = $temp;
        }

        return $array;
    }

    /**
     * Swapping $a and $b
     *
     * @param $a
     * @param $b
     */
    static protected function swap(&$a, &$b): void
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    /**
     * Searching of min element in array
     *
     * @param array $array
     * @return mixed element on success or false on failure
     */
    static private function min(array $array)
    {
        $min = false;

        if (!empty($array)) {

            $min = $array[0];

            foreach ($array as $item) {
                if ($item < $min) {
                    $min = $item;
                }
            }
        }

        return $min;
    }
}
