<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

use pvc\struct\range_collection\RangeElementInteger;

/**
 * @interface RangeElementIntegerInterface
 * @extends RangeElementInterface<RangeElementIntegerInterface, int>
 */
interface RangeElementIntegerInterface extends RangeElementInterface
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