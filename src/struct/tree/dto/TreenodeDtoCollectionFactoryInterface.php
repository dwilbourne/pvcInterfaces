<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionFactoryInterface;

/**
 * @template PayloadType
 * @extends CollectionFactoryInterface<TreenodeDtoInterface<PayloadType>>
 * @phpstan-import-type TreenodeDtoShape from TreenodeDtoInterface
 */
interface TreenodeDtoCollectionFactoryInterface extends CollectionFactoryInterface
{
    /**
     * @param array<non-negative-int, TreenodeDtoInterface<PayloadType>&TreenodeDtoShape> $elements
     * @return TreenodeDtoCollectionInterface<PayloadType>
     */
    public function MakeCollection(array $elements) : TreenodeDtoCollectionInterface;
}