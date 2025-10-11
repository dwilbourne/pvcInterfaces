<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template KeyType
 * @template ElementType of IndexedElementInterface
 * @extends CollectionInterface<KeyType, ElementType>
 */
interface CollectionOrderedByIndexInterface extends CollectionInterface
{
    /**
     * setIndex
     * @param KeyType $key
     * @param  non-negative-int  $index
     * @return void
     */
    public function setIndex($key, int $index): void;
}