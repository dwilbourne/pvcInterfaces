<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeElementFloatInterface
 * @template RangeElementType
 * @extends RangeElementInterface<RangeElementType>
 */
interface RangeElementFloatInterface extends RangeElementInterface
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
