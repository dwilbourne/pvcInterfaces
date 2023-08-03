<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeFactoryInterface
 * @template NodeType
 * @template NodeValueType
 * @template ListType
 */
interface TreenodeFactoryInterface
{
    /**
     * @function makeNode creates a tree node.
     *
     * @param non-negative-int $nodeid
     * @param TreenodeAbstractInterface<NodeType, NodeValueType, ListType> $parent
     * @param TreeAbstractInterface<NodeType, NodeValueType, ListType> $tree
     * @return  TreenodeAbstractInterface<NodeType, NodeValueType, ListType>
     */
    public function makeNode(int $nodeid, TreenodeAbstractInterface $parent, TreeAbstractInterface $tree):
    TreenodeAbstractInterface;
}