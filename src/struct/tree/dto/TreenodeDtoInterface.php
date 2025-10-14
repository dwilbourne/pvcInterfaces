<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template NodeId
 * @template TreeId
 */
interface TreenodeDtoInterface
{
    /**
     * @return NodeId
     */
    public function getNodeId();

    /**
     * @return NodeId|null
     */
    public function getParentId();

    /**
     * @return TreeId
     */
    public function getTreeId();

    /**
     * @return non-negative-int
     */
    public function getIndex(): int;
}