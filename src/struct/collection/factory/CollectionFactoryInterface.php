<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class CollectionFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionAbstractInterface<PayloadType, CollectionType>
     */
    public function makeCollection(): CollectionAbstractInterface;
}
