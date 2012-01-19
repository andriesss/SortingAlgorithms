<?php

namespace Centim\Sort;

/**
 * Quicksort is a divide and conquer algorithm. Quicksort first divides a large list into two
 * smaller sub-lists: the low elements and the high elements. Quicksort can then recursively sort the sub-lists
 *
 * Worst case performance   O(n2)
 * Best case performance    O(n log n)
 * Average case performance O(n log n)
 */
class QuickSort implements Sort
{
    public static function sort(array $a)
    {
        // an array of zero or one elements is already sorted
        if (count($a) <= 1) {
            return $a;
        }

        $less = $greater = array();

        $pivotKey = key($a);

        // select and remove a pivot value
        $pivot = array_shift($a);

        /*
         * reorder the list so that all elements with values less than the pivot come before the pivot, while
         * all elements with values greater than the pivot come after it
         */
        foreach ($a as $k => $v) {
            if ($v < $pivot) {
                $less[$k] = $v;
            } else {
                $greater[$k] = $v;
            }
        }

        // recursively sort the sub-list of lesser elements and the sub-list of greater elements.
        return array_merge(self::sort($less), array($pivotKey => $pivot), self::sort($greater));
    }
}
