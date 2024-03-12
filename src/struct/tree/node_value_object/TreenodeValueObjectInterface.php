<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

use pvc\interfaces\struct\payload\PayloadInterface;

/**
 * Class TreenodeValueObjectInterface
 * @template ValueType of PayloadInterface
 * @extends PayloadInterface<ValueType>
 */
interface TreenodeValueObjectInterface extends PayloadInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * setNodeId
     * @param int $nodeId
     */
    public function setNodeId(int $nodeId): void;

    /**
     * getParentId
     * @return non-negative-int|null
     */
    public function getParentId(): ?int;

    /**
     * setParentId
     * @param int $parentId
     */
    public function setParentId(int $parentId): void;

    /**
     * getTreeId
     * @return non-negative-int
     */
    public function getTreeId(): int;

    /**
     * setTreeId
     * @param int $treeId
     */
    public function setTreeId(int $treeId): void;

    /**
     * getNodeValue
     * @return ValueType
     */
    public function getValue(): mixed;

    /**
     * hydrateFromNumericArray
     *
     * this method is in the abstract class and the number of elements in the array is left indeterminate, meaning
     * that this method can be used for both ordered and unordered value objects.
     *
     * @param array<int, mixed> $nodeData
     */
    public function hydrateFromNumericArray(array $nodeData): void;
}
