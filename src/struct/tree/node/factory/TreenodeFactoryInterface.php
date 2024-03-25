<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\collection\factory\CollectionFactoryInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * setTree
     * @param TreeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $tree
     */
    public function setTree(TreeAbstractInterface $tree): void;

    /**
     * makeNode
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>
     */
    public function makeNode(): TreenodeAbstractInterface;

    /**
     * getCollectionFactory
     * @return CollectionFactoryInterface<CollectionType>
     */
    public function getCollectionFactory(): CollectionFactoryInterface;
}
