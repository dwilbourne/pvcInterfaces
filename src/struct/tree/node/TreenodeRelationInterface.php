<?php

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * additional methods regarding ancestors, descendants and children
 *
 * @template TreenodeType of TreenodeRelationInterface
 * @template CollectionType of CollectionInterface
 */
interface TreenodeRelationInterface
{
    /**
     * ancestor / descendant methods
     */

    /**
     * @param  TreenodeType  $node
     *
     * @return bool
     */
    public function isDescendantOf(TreenodeRelationInterface $node): bool;

    /**
     * @param  TreenodeType  $node
     *
     * @return bool
     */
    public function isAncestorOf(TreenodeRelationInterface $node): bool;


    /**
     * methods related to children
     */
    public function hasChildren(): bool;

    /**
     * @function getChild
     * @param non-negative-int $nodeid
     * @return TreenodeType|null
     */
    public function getChild(int $nodeid): ?TreenodeRelationInterface;

    /**
     * @function getChildren
     * @return CollectionType<TreenodeType>
     */
    public function getChildren(): CollectionInterface;

    /**
     * @return array<non-negative-int, TreenodeType>
     */
    public function getChildrenArray(): array;

    /**
     * @return TreenodeType|null
     */
    public function getFirstChild(): ?TreenodeRelationInterface;

    /**
     * @return TreenodeType|null
     */
    public function getLastChild(): ?TreenodeRelationInterface;

    /**
     * @param non-negative-int $n
     * @return TreenodeType|null
     */
    public function getNthChild(int $n): ?TreenodeRelationInterface;


}