<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Class TreenodeDTOUnorderedInterface
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore
 * @phpstan-import-type NodeData from TreenodeDTOInterface
 * @phpcs:ignore
 * @extends TreenodeDTOInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, TreenodeDTOUnorderedInterface, >
 */
interface TreenodeDTOUnorderedInterface extends TreenodeDTOInterface
{
    /**
     * hydrateFromNode
     * @phpcs:ignore
     * @param TreenodeUnorderedInterface<PayloadType> $node
     */
    public function hydrateFromNode(TreenodeAbstractInterface $node): void;


    /**
     * hydrateFromArray
     * @param NodeData $nodeData
     */
    public function hydrateFromArray(array $values): void;
}
