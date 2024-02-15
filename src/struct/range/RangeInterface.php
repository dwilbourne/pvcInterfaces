<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range;

/**
 * Class RangeInterface
 * @template DataType
 */
interface RangeInterface
{
    /**
     * setRange
     * @param DataType $min
     * @param DataType $max
     */
    public function setRange($min, $max): void;

    /**
     * getRange
     * @return array<DataType>
     */
    public function getRange(): array;

    /**
     * isInRange
     * @param DataType $x
     * @return bool
     */
    public function isInRange(mixed $x): bool;
}
