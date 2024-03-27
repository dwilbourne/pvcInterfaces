<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;

/**
 * Class CollectionFactoryInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionAbstractInterface<CollectionType>
     */
    public function makeCollection(): CollectionAbstractInterface;
}
