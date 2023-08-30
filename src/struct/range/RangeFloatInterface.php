<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range;

/**
 * @interface RangeElementFloatInterface is the float-based interface for a RangeElement.
 * @extends RangeInterface<RangeFloatInterface, float>
 */
interface RangeFloatInterface extends RangeInterface
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
