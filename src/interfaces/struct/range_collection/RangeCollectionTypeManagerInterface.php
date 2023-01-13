<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare (strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * Interface DataTypeValidatorInterface
 * @template element
 */
interface RangeCollectionTypeManagerInterface
{
    /**
     * validateDataType
     * @param element $x
     * @return bool
     */
    public function validateDataType($x) : bool;

    /**
     * compareData
     * @param element $x
     * @param element $y
     * @return int
     */
    public function compareData($x, $y) : int;
}
