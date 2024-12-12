<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOInterface;
use pvc\interfaces\struct\tree\node\factory\TreenodeFactoryInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template DtoType of TreenodeDTOInterface
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param int $treeId
     * @phpcs:ignore
     * @param TreenodeFactoryInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType> $treenodeFactory
     * @return TreeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, DtoType>
     */
    public function makeTree(int $treeId, TreenodeFactoryInterface $treenodeFactory): TreeAbstractInterface;
}
