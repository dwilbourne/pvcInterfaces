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
     * setNodeId
     * @param NodeIdType $nodeId
     *
     * @return void
     */
    public function setNodeId($nodeId): void;

    /**
     * @return NodeIdType|null
     */
    public function getParentId();

    /**
     * setParentId
     * @param NodeIdType $parentId
     *
     * @return void
     */
    public function setParentId($parentId): void;

    /**
     * getParent
     * @return NodeType|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * setParent
     * @param  NodeType  $parent
     *
     * @return void
     */
    public function setParent(TreenodeInterface $parent): void;

    /**
     * @return TreeIdType|null
     */
    public function getTreeId();

    /**
     * setTreeId
     * @param TreeIdType $treeId
     *
     * @return void
     */
    public function setTreeId($treeId): void;

    /**
     * getTree
     * @return TreeType|null
     */
    public function getTree(): ?TreeInterface;

    /**
     * setTree
     * @param  TreeType  $tree
     *
     * @return void
     */
    public function setTree(TreeInterface $tree): void;

    /**
     * @return non-negative-int
     */
    public function getIndex(): int;

    /**
     * setIndex
     * @param  non-negative-int  $index
     *
     * @return void
     */
    public function setIndex(int $index): void;
}