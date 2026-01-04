<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\tree\core\TreenodeCoreInterface;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends TreenodeCoreInterface<NodeIdType, TreeIdType>
 */
interface TreenodeDtoInterface extends TreenodeCoreInterface
{
    /**
     * setNodeId
     * @param NodeIdType $nodeId
     *
     * @return void
     */
    public function setNodeId($nodeId): void;

    /**
     * setParentId
     * @param NodeIdType|null $parentId
     *
     * @return void
     */
    public function setParentId($parentId = null): void;

    /**
     * setTreeId
     * @param TreeIdType $treeId
     *
     * @return void
     */
    public function setTreeId($treeId): void;
}