<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeElementIntegerInterface
 * @template RangeElementDataType
 * @extends RangeElementInterface<RangeElementDataType>
 */
interface RangeElementIntegerInterface extends RangeElementInterface
{
    /**
     * @return array<int, int>
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