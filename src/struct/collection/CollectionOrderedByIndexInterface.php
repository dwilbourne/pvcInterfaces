<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template ElementType of IndexedElementInterface
 * @extends CollectionInterface<ElementType>
 */
interface CollectionOrderedByIndexInterface extends CollectionInterface
{
    public function setIndex(int $key, int $index): void;
}