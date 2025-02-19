<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use Iterator;

/**
 * @template PayloadType
 * @extends Iterator<TreenodeDtoInterface<PayloadType>>
 */
interface TreenodeDtoCollectionInterface extends Iterator
{
    /**
     * @param non-negative-int $nodeId
     * @param array<TreenodeDtoInterface<PayloadType>> $treenodeDtos
     * @return void
     */
    public function importChildrenOf(int $nodeId, array $treenodeDtos): void;
}
