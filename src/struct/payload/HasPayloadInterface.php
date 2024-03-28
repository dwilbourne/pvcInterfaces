<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class HasPayloadInterface
 * All data structure interfaces should extend HasPayloadInterface so that the methods for accessing the data within
 * the structures remain consistent across all types
 * @template PayloadType
 */
interface HasPayloadInterface
{
    /**
     * setValue
     * @param PayloadType|null $value
     */
    public function setPayload($value): void;

    /**
     * getValue
     * @return PayloadType|null
     */
    public function getPayload();
}
