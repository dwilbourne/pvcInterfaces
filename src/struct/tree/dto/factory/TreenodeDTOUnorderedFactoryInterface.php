<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto\factory;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOUnorderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Class TreenodeDTOUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @phpstan-import-type NodeDataUnordered from TreenodeDTOUnorderedInterface
 * @phpcs:ignore
 * @extends TreenodeDTOFactoryInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, TreenodeDTOUnorderedInterface>
 */
interface TreenodeDTOUnorderedFactoryInterface extends TreenodeDTOFactoryInterface
{
    /**
     * makeDTO
     * @param NodeDataUnordered $nodeData
     * @return TreenodeDTOUnorderedInterface<PayloadType>
     */
    public function makeDTO(array $nodeData): TreenodeDTOUnorderedInterface;

    /**
     * makeDTOArray
     * @param array<NodeDataUnordered> $arrayNodeData
     * @return array<TreenodeDTOUnorderedInterface<PayloadType>>
     */
    public function makeDTOArrayFromArray(array $arrayNodeData): array;

    /**
     * makeDTOArrayFromTree
     * @param TreeUnorderedInterface<PayloadType> $tree
     * @return array<TreenodeDTOUnorderedInterface<PayloadType>>
     */
    public function makeDTOArrayFromTree(TreeAbstractInterface $tree): array;
}
