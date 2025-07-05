<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;

/**
 * @template PayloadType
 * @extends TreenodeInterface<PayloadType, TreenodeOrderedInterface, CollectionOrderedInterface>
 *
 */
interface TreenodeOrderedInterface extends TreenodeInterface, IndexedElementInterface
{
    /**
     * @return TreenodeOrderedInterface<PayloadType>|null
     */
    public function getFirstChild(): ?TreenodeOrderedInterface;

    /**
     * @return TreenodeOrderedInterface<PayloadType>|null
     */
    public function getLastChild(): ?TreenodeOrderedInterface;

    /**
     * @param non-negative-int $n
     * @return TreenodeOrderedInterface<PayloadType>|null
     */
    public function getNthChild(int $n): ?TreenodeOrderedInterface;
}