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
     * getMin
     * @return DataType
     */
    public function getMin(): mixed;

    /**
     * getMax
     * @return DataType
     */
    public function getMax(): mixed;

    /**
     * isInRange
     * @param DataType $x
     * @return bool
     */
    public function isInRange(mixed $x): bool;
}
