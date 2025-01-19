<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreenodeDTOInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template DtoType of TreenodeDTOInterface
 * @phpcs:ignore
 * @phpstan-type NodeData array{'nodeId': non-negative-int,'parentId': non-negative-int|null, 'treeId':non-negative-int,'payload': PayloadType, 'index'?:non-negative-int}
 */
interface TreenodeDTOInterface
{
    /**
     * hydrateFromNode
     * @param NodeType $node
     */
    public function hydrateFromNode(TreenodeAbstractInterface $node): void;

    /**
     * hydrateFromArray
     * @param NodeData $values
     */
    public function hydrateFromArray(array $values): void;

    public function getNodeId(): int;
    public function getParentId(): ?int;
    public function getTreeId(): int;
    public function getPayload(): mixed;
}
