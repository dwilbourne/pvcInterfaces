<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeElementFloatInterface
 * @extends RangeElementInterface<RangeElementFloatInterface, float>
 */
interface RangeElementFloatInterface extends RangeElementInterface
{
    /**
     * getRange
     * @return array<float>
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
