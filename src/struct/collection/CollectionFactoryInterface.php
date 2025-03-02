<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * Class CollectionFactoryInterface
 * @template ElementType of CollectionElementInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @param array<ElementType> $elements
     * @return CollectionInterface<ElementType>
     */
    public function makeCollection(array $elements): CollectionInterface;
}
