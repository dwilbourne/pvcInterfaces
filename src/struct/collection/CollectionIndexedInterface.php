<?php

namespace pvc\interfaces\struct\collection;

/**
 * @template ElementType
 * @extends CollectionInterface<ElementType>
 */
interface CollectionIndexedInterface extends CollectionInterface
{
    /**
     * @return ElementType
     */
    public function getNthElement();
}