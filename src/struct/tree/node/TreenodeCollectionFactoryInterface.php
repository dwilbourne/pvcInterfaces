<?php

namespace pvc\interfaces\struct\tree\node;

/**
 * @template NodeId
 * @template CollectionType of TreenodeCollectionInterface
 */
interface TreenodeCollectionFactoryInterface
{
    /**
     * makeCollection
     * @return CollectionType
     */
    public function makeCollection();
}