<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class HasPayloadInterface
 * All data structures should extend HasPayloadInterface so that the methods for accessing the data within the structure
 * remain consistent across all types of data structures
 * @template ValueType
 */
interface HasPayloadInterface
{
    /**
     * setValue
     * @param ValueType|null $value
     */
    public function setPayload($value): void;

    /**
     * getValue
     * @return ValueType|null
     */
    public function getPayload();
}
