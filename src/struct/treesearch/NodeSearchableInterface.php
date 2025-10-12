<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeSearchableInterface
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return NodeIdType
     */
    public function getNodeId(): int|string;

    /**
     * @return NodeType|null
     * do not use a specific return type here (e.g. NodeSearchableInterface).
     * Different implementations of getParent will return a "wider" object,
     * and you will get a liskov substitution problem.
     */
    public function getParent();

    /**
     * getChildrenArray
     * @return array<NodeType>
     */
    public function getChildrenArray(): array;
}
