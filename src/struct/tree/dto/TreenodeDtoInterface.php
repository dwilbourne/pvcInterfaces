<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
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
}