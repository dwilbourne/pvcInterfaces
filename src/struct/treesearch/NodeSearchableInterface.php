<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeSearchableInterface
 * @template TKey
 * @template NodeType of NodeSearchableInterface
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return TKey
     */
    public function getNodeId();

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
