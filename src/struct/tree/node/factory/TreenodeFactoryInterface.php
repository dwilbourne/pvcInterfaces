<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\collection\factory\CollectionFactoryInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template DtoType of TreenodeDTOInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType>
     */
    public function makeNode(): TreenodeAbstractInterface;

    /**
     * getCollectionFactory
     * @return CollectionFactoryInterface<PayloadType, CollectionType>
     */
    public function getCollectionFactory(): CollectionFactoryInterface;

    /**
     * setTree
     * @param TreeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType> $tree
     */
    public function setTree(TreeAbstractInterface $tree): void;
}
