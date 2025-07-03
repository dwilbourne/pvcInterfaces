<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template ElementType
 * @extends CollectionInterface<ElementType>
 */
interface CollectionOrderedInterface extends CollectionInterface
{
    /**
     * @param non-negative-int $index
     * @return ElementType|null
     */
    public function getNth(int $index);

    /**
     * @return ElementType|null
     */
    public function getFirst();

    /**
     * @return ElementType|null
     */

    public function getLast();
}