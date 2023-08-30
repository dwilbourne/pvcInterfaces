<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\range;

/**
 * @interface RangeElementIntegerInterface is the integer-based interface for a RangeElement.
 * @extends RangeInterface<RangeIntegerInterface, int>
 */
interface RangeIntegerInterface extends RangeInterface
{
    /**
     * @return array<int>
     */
    public function getRange(): array;

    /**
     * @return int
     */
    public function getMin(): int;

    /**
     * @return int
     */
    public function getMax(): int;
}