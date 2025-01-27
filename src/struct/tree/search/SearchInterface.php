<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class SearchInterface
 * @extends Iterator<NodeSearchableInterface>
 */
interface SearchInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeSearchableInterface $startNode
     */
    public function setStartNode(mixed $startNode): void;

    /**
     * getStartNode
     * @return NodeSearchableInterface
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
     * @return array<int, NodeSearchableInterface>
     */
    public function getNodes(): array;

    /**
     * current
     * @return NodeSearchableInterface|null
     */
    public function current(): mixed;

    /**
     * getParent
     * @return NodeSearchableInterface|null
     */
    public function getParent(): mixed;

    /**
     * getParentId
     * @return int|null
     */
    public function getParentId(): ?int;
}
