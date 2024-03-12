<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterfaceHasHas;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterfaceHas;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeFactoryInterface
 * @template ValueType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterfaceHasHas
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
     * @param TreenodeValueObjectInterfaceHas<ValueType> $valueObject
     * @return NodeType
     */
    public function makeNode(TreenodeValueObjectInterfaceHas $valueObject): TreenodeAbstractInterfaceHasHas;

    /**
     * makeCollection
     * @return CollectionAbstractInterface<ValueType, NodeType>
     */
    public function makeCollection(): CollectionAbstractInterface;
}
