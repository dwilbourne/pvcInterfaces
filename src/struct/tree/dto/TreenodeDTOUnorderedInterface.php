<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Class TreenodeDTOUnorderedInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeDTOUnorderedInterface
{
    /**
     * hydrateFromNode
     * @param TreenodeUnorderedInterface<PayloadType> $node
     */
    public function hydrateFromNode(TreenodeUnorderedInterface $node): void;

    /**
     * hydrateFromArray
     * @param array{
     *     'nodeId': non-negative-int,
     *     'parentId': non-negative-int|null,
     *     'treeId': non-negative-int,
     *     'payload': PayloadType
     * } $nodeData
     */
    public function hydrateFromAssociativeArray(array $nodeData): void;
}
