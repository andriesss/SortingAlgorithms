<?php

namespace Centim\Sort;

class CountingSort implements Sort
{
    public static function sort(array $a)
    {
        $n = count($a);

        // find largest and smallest integers in $a
        $smallest = min($a);
        $largest  = max($a);

        $t = $largest - $smallest +1;
        $tally = array_fill(0, $t, 0);

        for ($i = 0; $i < $n; $i++) {
            $tally[$a[$i]-$smallest]++;
        }

        $k = 0;
        for ($i = $smallest; $i <= $largest; $i++) {
            for ($j = $tally[$i-$smallest]; $j > 0; $j--) {
                $a[$k] = $i;
                $k++;
            }
        }

        return $a;
    }
}
