<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\collection;

use Iterator;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @template PayloadType of HasPayloadInterface
 * @extends Iterator<TreenodeInterface<PayloadType>>
 */
interface TreenodeCollectionInterface extends Iterator
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @param TreenodeInterface<PayloadType> $treenode
     * @return void
     */
    public function push(TreenodeInterface $treenode): void;

    /**
     * @return array<TreenodeInterface<PayloadType>>
     */
    public function getElements(): array;

    /**
     * @return non-negative-int
     */
    public function getKey(): int;

    /**
     * @return non-negative-int
     */
    public function getIndex(): int;

    /**
     * @param non-negative-int $index
     * @return void
     */
    public function setIndex(int $index): void;
}