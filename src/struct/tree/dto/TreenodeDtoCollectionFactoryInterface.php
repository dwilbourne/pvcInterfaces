<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template PayloadType
 */
interface TreenodeDtoCollectionFactoryInterface
{
    /**
     * @param array<TreenodeDtoInterface<PayloadType>> $dtoArray
     * @return TreenodeDtoCollectionInterface<PayloadType>
     */
    public function makeTreenodeDtoCollection(array $dtoArray) : TreenodeDtoCollectionInterface;
}