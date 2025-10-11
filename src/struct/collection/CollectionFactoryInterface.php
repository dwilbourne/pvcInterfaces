<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * Class CollectionFactoryInterface
 * @template KeyType of int|string
 * @template ElementType
 * @template CollectionType of CollectionInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @param array<KeyType, ElementType> $elements
     * @return CollectionType<KeyType, ElementType>
     */
    public function makeCollection(array $elements = []): CollectionInterface;
}
