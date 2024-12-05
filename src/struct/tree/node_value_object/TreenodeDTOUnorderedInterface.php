<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Class TreenodeDTOUnorderedInterface
 * @template PayloadType of HasPayloadInterface
 * @extends TreenodeDTOInterface<PayloadType, TreenodeDTOUnorderedInterface>
 */
interface TreenodeDTOUnorderedInterface extends TreenodeDTOInterface
{
    /**
     * hydrateFromNode
     * @param TreenodeUnorderedInterface<PayloadType> $node
     */
    public function hydrateFromNode(TreenodeUnorderedInterface $node): void;

    /**
     * hydrateFromAssociativeArray
     * @param array{
     *     'nodeId': non-negative-int,
     *     'parentId': non-negative-int|null,
     *     'treeId': non-negative-int,
     *     'payload': PayloadType
     * } $nodeData
     */
    public function hydrateFromAssociativeArray(array $nodeData): void;

    /**
     * hydrateFromNumericArray
     * @param array{
     *        0: non-negative-int,
     *        1: non-negative-int|null,
     *        2: non-negative-int,
     *        3: PayloadType
     *    } $nodeData
     */
    public function hydrateFromNumericArray(array $nodeData): void;
}
