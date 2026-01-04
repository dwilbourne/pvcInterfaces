<?php

namespace pvc\interfaces\struct\tree\core;

/**
 * @template NodeIdType of array-key
 */
interface HasNodeIdInterface
{
    /**
     * getNodeId
     * @return NodeIdType
     * calling getNodeId on an uninitialized node is an error
     */
    public function getNodeId(): int|string;

}