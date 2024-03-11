<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

use pvc\interfaces\struct\payload\ValidatorPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;

/**
 * Class TreenodeValueObjectUnorderedInterface
 * @template ValueType of ValidatorPayloadInterface
 * @extends TreenodeValueObjectInterface<ValueType>
 */
interface TreenodeValueObjectUnorderedInterface extends TreenodeValueObjectInterface
{
    /**
     * hydrateFromNode
     * @param TreenodeUnorderedInterface<ValueType> $node
     */
    public function hydrateFromNode(TreenodeUnorderedInterface $node): void;

    /**
     * hydrateFromAssociativeArray
     * @param array{
     *     'nodeId': non-negative-int,
     *     'parentId': non-negative-int|null,
     *     'treeId': non-negative-int,
     *     'value': ValueType
     * } $nodeData
     */
    public function hydrateFromAssociativeArray(array $nodeData): void;

    /**
     * hydrateFromNumericArray
     * @param array{
     *        0: non-negative-int,
     *        1: non-negative-int|null,
     *        2: non-negative-int,
     *        3: ValueType
     *    } $nodeData
     */
    public function hydrateFromNumericArray(array $nodeData): void;
}
