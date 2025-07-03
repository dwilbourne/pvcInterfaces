<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template ElementType
 * @extends CollectionInterface<ElementType>
 */
interface CollectionIndexedInterface extends CollectionInterface
{
    /**
     * @param non-negative-int $index
     * @return ElementType
     */
    public function getNth(int $index);

    /**
     * @return ElementType
     */
    public function getFirst();

    /**
     * @return ElementType
     */

    public function getLast();
}