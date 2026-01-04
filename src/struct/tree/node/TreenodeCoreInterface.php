<?php

namespace pvc\interfaces\struct\tree\node;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 */
interface TreenodeCoreInterface
{
    /**
     * getNodeId
     * @return NodeIdType
     * calling getNodeId on an uninitialized node is an error
     */
    public function getNodeId(): int|string;

    /**
     * getParentId
     * @return NodeIdType|null
     */
    public function getParentId(): int|string|null;

    /**
     * @return TreeIdType|null
     */
    public function getTreeId();

}