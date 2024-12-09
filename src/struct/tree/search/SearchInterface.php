<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class SearchInterface
 * @template NodeType of NodeInterface
 * @extends Iterator<NodeType>
 */
interface SearchInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeType $startNode
     */
    public function setStartNode(mixed $startNode): void;

    /**
     * getStartNode
     * @return NodeType
     */
    public function getStartNode(): mixed;

    /**
     * setNodeFilter
     * @param callable $nodeFilter
     */
    public function setNodeFilter(callable $nodeFilter): void;

    /**
     * getNodeFilter
     * @return callable
     */
    public function getNodeFilter(): callable;

    /**
     * getNodes
     * gets all the nodes at once
     * @return array<int, NodeType>
     */
    public function getNodes(): array;


    /**
     * current
     * @return NodeType|null
     */
    public function current(): mixed;
}
