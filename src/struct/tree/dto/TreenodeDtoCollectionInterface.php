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
     * @param non-negative-int $key
     * @param TreenodeDtoInterface<PayloadType> $treenodeDto
     * @return void
     */
    public function add(int $key, TreenodeDtoInterface $treenodeDto): void;
}
