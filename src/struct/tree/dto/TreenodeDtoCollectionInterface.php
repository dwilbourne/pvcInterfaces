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
     * @return void
     * initializes the collection
     */
    public function initialize(): void;

    /**
     * @param non-negative-int $nodeId
     * @param array<TreenodeDtoInterface<PayloadType>> $treenodeDtos
     * @return void
     */
    public function importChildrenOf(int $nodeId, array $treenodeDtos): void;
}
