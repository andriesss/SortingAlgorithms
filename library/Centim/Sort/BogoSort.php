<?php

namespace Centim\Sort;

/**
 * Bogosort, also stupid sort or slowsort is a particularly ineffective sorting algorithm based on the generate and
 * test paradigm. It is not useful for sorting, but may be used for educational purposes, to contrast it with other more
 * realistic algorithms; it has also been used as an example in logic programming.
 *
 * If bogosort were used to sort  a deck of cards, it would consist of checking if the deck were in order, and if it
 * were not, throwing the deck into the air, picking the cards up at random, and repeating the process until the deck is
 * sorted. Its name comes from the word bogus.
 *
 * Worst case performance 	O(infinity)
 * Best case performance 	Ω(n)
 * Average case performance O(n × n!)
 */
class BogoSort
{
    public function sort(array $a)
    {
        do {
            // spin the array, and hope it's sorted properly
            shuffle($a);

            for ($i = 1; $i <= count($i) - 1; $i++) {
                if ($a[$i-1] > $a[$i]) {
                    continue;
                }

                break;
            }
        } while (true);

        return $a;
    }
}
