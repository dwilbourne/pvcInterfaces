<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range;

/**
 * @interface RangeElementInterface<RangeElementType, RangeElementDataType> defines the interface for a RangeElement.
 *
 * RangeElement is a simple structure consisting of a min and max.  Abstracting this into an object permits adding
 * behaviors to the RangeElement as well as allowing one to maintain consistent data types both within the RangeElement
 * and within a RangeCollection.
 *
 * @template RangeElementType
 * @template RangeElementDataType
 */
interface RangeInterface
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

    /**
     * isInRange
     * @param RangeElementDataType $value
     * @return bool
     */
    public function isInRange($value): bool;
}
