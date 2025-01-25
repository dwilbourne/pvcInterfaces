<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeDTOSorterInterface
{
    /**
     * @param array<TreenodeDTOFactoryInterface<PayloadType>> $dtos
     * @return void
     */
    public function sortDtos(array &$dtos): void;
}