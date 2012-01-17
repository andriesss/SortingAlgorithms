<?php

namespace Centim\Sort;

/**
 * Bubble sort, also known as sinking sort, is a simple sorting algorithm that works by repeatedly stepping through
 * the list to be sorted, comparing each pair of adjacent items and swapping them if they are in the wrong order.
 *
 * The pass through the list is repeated until no swaps are needed, which indicates that the list is sorted.
 * The algorithm gets its name from the way smaller elements "bubble" to the top of the list. Because it only uses
 * comparisons to operate on elements, it is a comparison sort. Although the algorithm is simple, it is not efficient
 * for sorting large lists; other algorithms are better.
 *
 * Worst case performance:	 O(n2)
 * Best case performance: 	 O(n)
 * Average case performance: O(n2)
 */
class BubbleSort
{
    public function sort(array $a)
    {
        $n = count($a);

        do {
            $newn = 0;

            for ($i = 1; $i <= $n - 1; $i++) {
                if ($a[$i-1] > $a[$i]) {
                    $tmp  = $a[$i-1];
                    $newn = $n;

                    $a[$i-1] = $a[$i];
                    $a[$i]   = $tmp;
                }
            }

            if (0 === $n = $newn) {
                break;
            }
        } while (true);

        return $a;
    }
}

$sort = new BubbleSort();
$x = $sort->sort(array(5, 3, 80, 4 , 1, 2, 6));

print_r($x);
