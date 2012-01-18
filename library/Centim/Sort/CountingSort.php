<?php

namespace Centim\Sort;

class CountingSort implements Sort
{
    public static function sort(array $a)
    {
        $n = count($a);

        $s = $b = current($a);

        // find largest and smallest integers in $a
        for ($i = 1; $i < $n; $i++) {
            if ($a[$i] < $s) {
                $s = $a[$i];
            } else if ($a[$i] > $b) {
                $b = $i;
            }
        }

        $t = $b - $s +1;
        $tally = array_fill(0, $t, 0);

        for ($i = 0; $i < $n; $i++) {
            $tally[$a[$i]-$s]++;
        }

        $k = 0;
        for ($i = $s; $i <= $b; $i++) {
            for ($j = $tally[$i-$s]; $j > 0; $j--) {
                $a[$k] = $i;
                $k++;
            }
        }

        return $a;
    }
}
