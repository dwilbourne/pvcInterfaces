<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @template PayloadType
 * @extends CollectionFactoryInterface<TreenodeDtoInterface<PayloadType>>
 */
interface TreenodeDtoCollectionFactoryInterface extends CollectionFactoryInterface
{
    /**
     * @param array<TreenodeDtoInterface<PayloadType>> $elements
     * @return TreenodeDtoCollectionInterface<PayloadType>
     */
    public function MakeCollection(array $elements) : TreenodeDtoCollectionInterface;
}