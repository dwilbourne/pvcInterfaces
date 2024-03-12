<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class PayloadInterface
 * All data structures should extend PayloadInterface so that the methods for accessing the data within the structure
 * remain consistent across all types of data structures
 * @template ValueType
 */
interface PayloadInterface
{
    /**
     * setValue
     * @param ValueType|null $value
     */
    public function setValue($value): void;

    /**
     * getValue
     * @return ValueType|null
     */
    public function getValue();
}
