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
     * @return NodeIdType|null
     */
    public function getParentId();

    /**
     * @return TreeIdType|null
     */
    public function getTreeId();

    /**
     * @return non-negative-int
     */
    public function getIndex(): int;
}