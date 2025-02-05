<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class SearchInterface
 * There is nothing about the interface that requires uniformity of type between nodes.  The implementation
 * for a kind of search may require that all nodes share a common interface, but the search interface itself does not.
 * @extends Iterator<mixed>
 */
interface SearchInterface extends Iterator
{
    /**
     * setStartNode
     * @param mixed $startNode
     */
    public function setStartNode(mixed $startNode): void;

    /**
     * getStartNode
     * @return mixed
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
     * @return array<non-negative-int, mixed>
     */
    public function getNodes(): array;

    /**
     * current
     * @return mixed|null
     */
    public function current(): mixed;
}
