<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Class TreenodeDTOOrderedInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeDTOOrderedInterface
{
    /**
     * hydrateFromNode
     * @param TreenodeOrderedInterface<PayloadType> $node
     * @return void
     */
    public function hydrateFromNode(TreenodeOrderedInterface $node): void;

    /**
     * hydrateFromArray
     * @param array{
     *     'nodeId': non-negative-int,
     *     'parentId': non-negative-int|null,
     *     'treeId': non-negative-int,
     *     'payload': PayloadType,
     *     'index': non-negative-int
     * } $nodeData
     */
    public function hydrateFromArray(array $nodeData): void;
}
