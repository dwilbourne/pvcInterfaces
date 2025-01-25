<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class CollectionFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionInterface<PayloadType>
     */
    public function makeCollection(): CollectionInterface;
}
