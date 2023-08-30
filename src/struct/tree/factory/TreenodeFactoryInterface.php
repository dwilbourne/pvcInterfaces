<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeFactoryInterface
 * @template ValueType
 * @template NodeType of TreenodeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template TreeType of TreeAbstractInterface
 */
interface TreenodeFactoryInterface
{

    /**
     * setTree
     * @param TreeType $tree
     */
    public function setTree(TreeAbstractInterface $tree): void;

    /**
     * makeNode
     * @param TreenodeValueObjectInterface<ValueType> $valueObject
     * @return NodeType
     */
    public function makeNode(TreenodeValueObjectInterface $valueObject): TreenodeAbstractInterface;

    /**
     * makeCollection
     * @return CollectionType<NodeType>
     */
    public function makeCollection(): CollectionAbstractInterface;
}
