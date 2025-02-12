<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * Class CollectionFactoryInterface
 * @template ElementType of CollectionInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionInterface<ElementType>
     */
    public function makeCollection(): CollectionInterface;
}
