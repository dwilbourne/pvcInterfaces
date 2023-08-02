<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeValueObjectInterface
 * @template NodeValueType
 */
interface TreenodeValueObjectInterface
{
    /**
     * getNodeId
     * @return int
     */
    public function getNodeId(): int;

    /**
     * getParentId
     * @return int|null
     */
    public function getParentId(): ?int;

    /**
     * getNodeValue
     * @return NodeValueType
     */
    public function getValue();

    /**
     * @function isRoot returns true if the node is the root of the tree (e.g. has no parent)
     * @return bool
     */
    public function isRoot(): bool;

    /**
     * @function getChildIds
     *
     * gets an array of the children.  The keys from the array argument are preserved
     *
     * @return array<TreenodeValueObjectInterface>
     */
    public function getChildIds(array $treenodeValueObjectArray): array;
}