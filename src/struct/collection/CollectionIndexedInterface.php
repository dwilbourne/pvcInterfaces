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
    public function getNthElement(int $index);

    /**
     * @return ElementType
     */
    public function getFirstElement();

    /**
     * @return ElementType
     */

    public function getLastElement();
}