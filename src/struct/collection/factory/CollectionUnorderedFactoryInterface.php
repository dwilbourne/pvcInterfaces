<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection\factory;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class CollectionUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @extends CollectionFactoryInterface<PayloadType, CollectionUnorderedInterface>
 */
interface CollectionUnorderedFactoryInterface extends CollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionUnorderedInterface<PayloadType>
     */
    public function makeCollection(): CollectionUnorderedInterface;
}
