<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeDTOFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template DtoType of TreenodeDTOInterface
 * @phpstan-import-type NodeData from TreenodeDTOInterface
 */
interface TreenodeDTOFactoryInterface
{
    /**
     * makeDTO
     * @return DtoType
     */
    public function makeDTO(): TreenodeDTOInterface;

    /**
     * makeDtoArrayFromArray
     * @param array<NodeData> $arrayNodeData
     * @return array<DtoType>
     */
    public function makeDtoArrayFromArray(array $arrayNodeData): array;

    /**
     * makeDtoArrayFromTree
     * @param TreeType $tree
     * @return array<DtoType>
     */
    public function makeDtoArrayFromTree(TreeAbstractInterface $tree): array;
}
