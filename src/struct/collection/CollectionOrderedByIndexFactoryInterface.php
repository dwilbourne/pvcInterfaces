<?php

namespace pvc\interfaces\struct\collection;

/**
 * Class CollectionOrderedFactoryInterface
 * @template ElementType of IndexedElementInterface
 * @template KeyType
 * @template CollectionType of CollectionOrderedByIndexInterface
 */

interface CollectionOrderedByIndexFactoryInterface
{
    /**
     * makeCollection
     * @param array<KeyType, ElementType> $elements
     * @return CollectionType<ElementType>
     */
    public function makeCollection(array $elements = []): CollectionOrderedByIndexInterface;

}