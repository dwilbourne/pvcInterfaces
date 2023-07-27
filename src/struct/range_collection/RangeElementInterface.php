<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeElementInterface<RangeElementType, RangeElementDataType>
 * @template RangeElementType
 * @template RangeElementDataType
 */
interface RangeElementInterface
{
    /**
     * @function getRange returns an array with two elements - the min and the max
     * @return array<RangeElementDataType>
     */
    public function getRange(): array;

    /**
     * setMin
     * @param RangeElementDataType $min
     */
    public function setMin($min): void;

    /**
     * @function getMin returns the min value of the range
     * @return RangeElementDataType
     */
    public function getMin();

    /**
     * setMax
     * @param RangeElementDataType $max
     */
    public function setMax($max): void;

    /**
     * @function getMax gets the max value in the range
     * @return RangeElementDataType
     */
    public function getMax();
}