<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeFloatInterface
 * @template RangeElementDataType
 * @extends RangeElementInterface<RangeElementDataType>
 */
interface RangeFloatInterface
{
    /**
     * getRange
     * @return array<int, float>
     */
    public function getRange(): array;

    /**
     * @return float
     */
    public function getMin(): float;

    /**
     * @return float
     */
    public function getMax(): float;
}