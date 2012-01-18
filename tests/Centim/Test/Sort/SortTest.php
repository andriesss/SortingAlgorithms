<?php

namespace Centim\Test\Sort;

use Centim\Sort;

class SortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests bubble sort algorithm
     *
     * @param $unsorted - unsorted array
     * @param $sorted   - expected sorted result
     * @dataProvider providerUnsortedArrayWithIntegers
     */
    public function testBubbleSort($unsorted, $sorted)
    {
        $this->assertEquals($sorted, Sort\BubbleSort::sort($unsorted));
    }

    /**
     * Tests counting sort algorithm
     *
     * @param $unsorted - unsorted array
     * @param $sorted   - expected sorted result
     * @dataProvider providerUnsortedArrayWithIntegers
     */
    public function testCountingSort($unsorted, $sorted)
    {
        $this->assertEquals($sorted, Sort\CountingSort::sort($unsorted));
    }

    public function providerUnsortedArrayWithIntegers()
    {
        return array(
            array(
                'unsorted' => array(6, 4, 6, 8, 9, 6, 4, 9, 5, 7, 5, 5, 8, 5),
                'sorted'   => array(4, 4, 5, 5, 5, 5, 6, 6, 6, 7, 8, 8, 9, 9),
            )
        );
    }
}
