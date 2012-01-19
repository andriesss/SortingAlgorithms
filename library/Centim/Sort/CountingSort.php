<?php

namespace Centim\Sort;

class CountingSort implements Sort
{
    public static function sort(array $a)
    {
        $n = count($a);
        $s = min($a);
        $b = max($a);

        $t = $b - $s +1;
        $counts = array_fill(0, $t, 0);

        for ($i = 0; $i < $n; $i++) {
            $counts[$a[$i]-$s]++;
        }

        $k = 0;
        for ($i = $s; $i <= $b; $i++) {
            for ($j = $counts[$i-$s]; $j > 0; $j--) {
                $a[$k++] = $i;
            }
        }

        return $a;
    }
}
