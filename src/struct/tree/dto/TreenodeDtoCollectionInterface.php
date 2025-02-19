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
     * @param non-negative-int $key
     * @param TreenodeDtoInterface<PayloadType> $treenodeDto
     * @return void
     */
    public function add(int $key, TreenodeDtoInterface $treenodeDto): void;
}
