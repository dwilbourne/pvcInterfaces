<?php

namespace pvc\interfaces\struct\tree\core;

/**
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @extends HasNodeIdInterface<NodeIdType>
 */
interface TreenodeCoreInterface extends HasNodeIdInterface
{
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