<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;

/**
 * @extends TreenodeInterface<TreenodeOrderedInterface, CollectionOrderedInterface>
 *
 */
interface TreenodeOrderedInterface extends TreenodeInterface, IndexedElementInterface
{
    /**
     * @return TreenodeOrderedInterface|null
     */
    public function getFirstChild(): ?TreenodeOrderedInterface;

    /**
     * @return TreenodeOrderedInterface|null
     */
    public function getLastChild(): ?TreenodeOrderedInterface;

    /**
     * @param non-negative-int $n
     * @return TreenodeOrderedInterface|null
     */
    public function getNthChild(int $n): ?TreenodeOrderedInterface;
}