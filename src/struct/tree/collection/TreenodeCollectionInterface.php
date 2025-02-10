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
     * @param TreenodeInterface<PayloadType> $node
     * @return void
     */
    public function push(TreenodeInterface $node): void;

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
     * @param TreenodeInterface<PayloadType> $node
     * @return non-negative-int
     */
    public function getIndex(TreenodeInterface $node): int;

    /**
     * @param TreenodeInterface<PayloadType> $node
     * @param non-negative-int $index
     * @return void
     */
    public function setIndex(TreenodeInterface $node, int $index): void;
}