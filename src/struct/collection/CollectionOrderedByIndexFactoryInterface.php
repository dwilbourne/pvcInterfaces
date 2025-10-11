<?php

namespace pvc\interfaces\struct\collection;

use Relay\KeyType;

/**
 * Class CollectionOrderedFactoryInterface
 * @template KeyType of array-key
 * @template ElementType of IndexedElementInterface
 * @template CollectionType of CollectionOrderedByIndexInterface
 */

interface CollectionOrderedByIndexFactoryInterface
{
    /**
     * makeCollection
     * @param array<KeyType, ElementType> $elements
     * @return CollectionOrderedByIndexInterface<KeyType, ElementType>
     */
    public function makeCollection(array $elements = []): CollectionOrderedByIndexInterface;

}