<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class CollectionOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface CollectionOrderedFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionAbstractInterface<PayloadType, CollectionOrderedInterface<PayloadType>>
     */
    public function makeCollection(): CollectionAbstractInterface;
}
