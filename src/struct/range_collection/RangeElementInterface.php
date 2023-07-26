<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

use DateTime;

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
    public function getMin(): int|float|DateTime;

    /**
     * @function getMax gets the max value in the range
     * @return RangeElementDataType
     */
    public function getMax(): int|float|DateTime;
}