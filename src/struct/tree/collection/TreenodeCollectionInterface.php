<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\collection;

use Iterator;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @template PayloadType
 * @extends Iterator<TreenodeInterface<PayloadType>>
 */
interface TreenodeCollectionInterface extends Iterator
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @param TreenodeInterface<PayloadType> $treeNode
     * @return void
     */
    public function add(TreenodeInterface $treeNode): void;

    /**
     * @return array<TreenodeInterface<PayloadType>>
     */
    public function getElements(): array;

    /**
     * @param TreenodeInterface<PayloadType> $node
     * @return non-negative-int
     */
    public function getKey(TreenodeInterface $node): int;

    /**
     * @param non-negative-int $key
     * @return non-negative-int
     */
    public function getIndex(int $key): int;

    /**
     * @param non-negative-int $key
     * @param non-negative-int $index
     * @return void
     */
    public function setIndex(int $key, int $index): void;
}