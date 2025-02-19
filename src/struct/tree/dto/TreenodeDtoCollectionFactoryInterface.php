<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template PayloadType
 */
interface TreenodeDtoCollectionFactoryInterface
{
    /**
     * @return TreenodeDtoCollectionInterface<TreenodeDtoInterface<PayloadType>>
     */
    public function makeTreenodeDtoCollection() : TreenodeDtoCollectionInterface;
}