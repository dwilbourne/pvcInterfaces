<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * Class SearchInterface
 * There is nothing about the interface that requires uniformity of type between nodes.  The implementation
 * for a kind of search may require that all nodes share a common interface, but the search interface itself does not.
 * @extends Iterator<mixed>
 */

/**
 * @template NodeType of NodeSearchableInterface
 * @extends Iterator<non-negative-int, NodeType>
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
     * getNodes
     * gets all the nodes at once
     * @return array<non-negative-int, NodeType>
     */
    public function getNodes(): array;

    /**
     * current
     * @return NodeType|null
     */
    public function current(): mixed;
}
