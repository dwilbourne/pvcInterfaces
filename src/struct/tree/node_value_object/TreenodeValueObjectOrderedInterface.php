<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Class TreenodeValueObjectOrderedInterface
 * @template PayloadType of HasPayloadInterface
 * @extends TreenodeValueObjectInterface<PayloadType>
 */
interface TreenodeValueObjectOrderedInterface extends TreenodeValueObjectInterface
{
    /**
     * getIndex retrieves the ordinal position
     * @return non-negative-int
     */
    public function getIndex(): int;

    /**
     * setIndex
     * @param int $index
     */
    public function setIndex(int $index): void;

    /**
     * dehydrateNode
     * @param TreenodeOrderedInterface<PayloadType> $node
     * @return void
     */
    public function hydrateFromNode(TreenodeOrderedInterface $node): void;

    /**
     * hydrateFromAssociativeArray
     * @param array{
     *     'nodeId': non-negative-int,
     *     'parentId': non-negative-int|null,
     *     'treeId': non-negative-int,
     *     'payload': PayloadType,
     *     'index': non-negative-int
     * } $nodeData
     */
    public function hydrateFromAssociativeArray(array $nodeData): void;

    /**
     * hydrateFromNumericArray
     * @param array{
     *        0: non-negative-int,
     *        1: non-negative-int|null,
     *        2: non-negative-int,
     *        3: PayloadType,
     *        4: non-negative-int,
     *    } $nodeData
     */
    public function hydrateFromNumericArray(array $nodeData): void;
}
