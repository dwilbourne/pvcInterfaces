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
     * @param array<mixed> $nodeData
     */
    public function hydrateFromArray(array $nodeData): void;
}
