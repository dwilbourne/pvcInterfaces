<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template ElementType of IndexedElementInterface
 * @extends CollectionInterface<ElementType>
 */
interface IndexedCollectionInterface extends CollectionInterface
{
    /**
     * setIndex
     * @param array-key $key
     * @param  non-negative-int  $index
     * @return void
     */
    public function setIndex($key, int $index): void;
}