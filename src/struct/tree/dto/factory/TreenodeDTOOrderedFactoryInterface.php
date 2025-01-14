<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto\factory;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOOrderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreenodeDTOOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @phpstan-import-type NodeDataOrdered from TreenodeDTOOrderedInterface
 * @phpcs:ignore
 * @extends TreenodeDTOFactoryInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, TreenodeDTOOrderedInterface>
 */
interface TreenodeDTOOrderedFactoryInterface extends TreenodeDTOFactoryInterface
{
    /**
     * makeDTO
     * @return TreenodeDTOOrderedInterface<PayloadType>
     */
    public function makeDTO(): TreenodeDTOOrderedInterface;

    /**
     * makeDTOArray
     * @param array<NodeDataOrdered> $arrayNodeData
     * @return array<TreenodeDTOOrderedInterface<PayloadType>>
     */
    public function makeDTOArrayFromArray(array $arrayNodeData): array;

    /**
     * makeDTOArray
     * @param TreeOrderedInterface<PayloadType> $tree
     * @return array<TreenodeDTOOrderedInterface<PayloadType>>
     */
    public function makeDTOArrayFromTree(TreeAbstractInterface $tree): array;
}
