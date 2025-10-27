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
interface TreenodeDtoFactoryInterface
{
    /**
     * makeTreenodeDto
     *
     * @return TreenodeDtoInterface<NodeIdType, NodeType, TreeIdType, TreeType>
     */
    public function makeTreenodeDto(): TreenodeDtoInterface;
}