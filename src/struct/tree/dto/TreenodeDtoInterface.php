<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\tree\node\TreenodeInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @template TreeIdType of array-key
 * @template TreeType of TreeInterface
 */
interface TreenodeDtoInterface
{
    /**
     * @return NodeIdType
     */
    public function getNodeId();

    /**
     * @return NodeIdType|null
     */
    public function getParentId();

    /**
     * getParent
     * @return NodeType|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * @return TreeIdType|null
     */
    public function getTreeId();

    /**
     * getTree
     * @return TreeType|null
     */
    public function getTree(): ?TreeInterface;

    /**
     * @return non-negative-int
     */
    public function getIndex(): int;
}