<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;

/**
 * Class TreenodeValueObjectOrderedInterface
 * @template ValueType
 * @extends TreenodeValueObjectInterface<ValueType>
 */
interface TreenodeValueObjectOrderedInterface extends TreenodeValueObjectInterface
{
    /**
     * getIndex retrieves the ordinal position
     * @return non-negative-int
     */
    public function getIndex(): int;

    /**
     * dehydrateNode
     * @param TreenodeOrderedInterface<ValueType> $node
     * @return void
     */
    public function hydrateFromNode(TreenodeOrderedInterface $node): void;

    /**
     * hydrateFromAssociativeArray
     * @param array{
     *     'nodeId': non-negative-int,
     *     'parentId': non-negative-int|null,
     *     'treeId': non-negative-int,
     *     'value': ValueType,
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
     *        3: ValueType,
     *        4: non-negative-int,
     *    } $nodeData
     */
    public function hydrateFromNumericArray(array $nodeData): void;
}
