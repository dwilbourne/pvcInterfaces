<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template TKey of array-key
 * @template ElementType of IndexedElementInterface
 * @extends CollectionInterface<TKey, ElementType>
 */
interface IndexedCollectionInterface extends CollectionInterface
{
    /**
     * setIndex
     * @param TKey $key
     * @param  non-negative-int  $index
     * @return void
     */
    public function setIndex($key, int $index): void;
}