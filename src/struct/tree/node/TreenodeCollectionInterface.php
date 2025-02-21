<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use Iterator;

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
     * @return int
     */
    public function count(): int;

    /**
     * @param non-negative-int $key
     * @param TreenodeInterface<PayloadType> $treeNode
     * @return void
     */
    public function add(int $key, TreenodeInterface $treeNode): void;

    /**
     * @param non-negative-int $key
     * @return void
     */
    public function delete(int $key): void;

    /**
     * @return TreenodeInterface
     */
    public function getElements(): array;

    /**
     * @param TreenodeInterface<PayloadType> $node
     * @return non-negative-int|false
     */
    public function getKey(TreenodeInterface $node): int|false;

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