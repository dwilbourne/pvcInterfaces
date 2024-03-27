<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class CollectionUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface CollectionUnorderedFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionAbstractInterface<PayloadType, CollectionUnorderedInterface<PayloadType>>
     */
    public function makeCollection(): CollectionAbstractInterface;
}
