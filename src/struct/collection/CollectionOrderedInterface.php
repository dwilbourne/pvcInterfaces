<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template ElementType
 * @extends CollectionInterface<ElementType>
 */
interface CollectionOrderedInterface extends CollectionInterface
{
    /**
     * getIndex gets the ordinal position of the element in the list corresponding to $key
     * @param non-negative-int $key
     * @return non-negative-int
     */
    public function getIndex(int $key): int;

    /**
     * setIndex sets the ordinal position of an element in the list
     * @param non-negative-int $key
     * @param non-negative-int $newIndex
     */
    public function setIndex(int $key, int $newIndex): void;
}