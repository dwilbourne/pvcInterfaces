<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template PayloadType
 * @phpstan-import-type TreenodeDtoShape from TreenodeDtoInterface
 */
interface TreenodeDtoSorterInterface
{
    /**
     * @param array<TreenodeDtoShape&TreenodeDtoInterface<PayloadType>> $childDtos
     * @return bool
     */
    public function treenodeDtoSort(array &$childDtos): bool;
}