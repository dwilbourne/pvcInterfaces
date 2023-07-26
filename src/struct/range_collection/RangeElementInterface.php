<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeElementInterface
 * @template RangeElementDataType
 */
interface RangeElementInterface
{
    /**
     * @function getRange returns an array with two elements - the "min" and the "max"
     * @return array<int, RangeElementDataType>
     */
    public function getRange(): array;

    /**
     * @function getMin returns the min value of the range
     * @return RangeElementDataType
     */
    public function getMin();

    /**
     * @function getMax gets the max value in the range
     * @return RangeElementDataType
     */
    public function getMax();
}