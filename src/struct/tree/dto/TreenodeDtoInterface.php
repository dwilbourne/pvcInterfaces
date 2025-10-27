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
     * @param NodeIdType|null $parentId
     *
     * @return void
     */
    public function setParentId($parentId = null): void;

    /**
     * getParent
     * @return NodeType|null
     */
    public function getParent(): ?TreenodeInterface;

    /**
     * setParent
     * @param  NodeType|null  $parent
     *
     * @return void
     */
    public function setParent(?TreenodeInterface $parent = null): void;

    /**
     * @return TreeIdType
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
     * @return TreeType
     */
    public function getTree(): TreeInterface;

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