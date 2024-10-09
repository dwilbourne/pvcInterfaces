<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class TreeSearchInterface
 * @template NodeIdType of array-key
 */
interface TreeSearchInterface
{
    /**
     * setStartNode
     * @param NodeSearchableInterface $node
     */
    public function setStartNode($node): void;

    /**
     * getStartNode
     * @return NodeSearchableInterface|null
     */
    public function getStartNode(): mixed;

    /**
     * setSearchStrategy
     * @param TreeSearchStrategyInterface<NodeIdType> $strategy
     */
    public function setSearchStrategy(TreeSearchStrategyInterface $strategy): void;

    /**
     * getSearchStrategy
     * @return TreeSearchStrategyInterface<NodeIdType>
     */
    public function getSearchStrategy(): TreeSearchStrategyInterface;

    /**
     * setSearchFilter
     * @param NodeFilterInterface $nodeFilter
     */
    public function setSearchFilter(NodeFilterInterface $nodeFilter): void;

    /**
     * getSearchFilter
     * @return NodeFilterInterface
     */
    public function getSearchFilter(): NodeFilterInterface;

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
     * key
     * @return NodeIdType|null
     */
    public function key(): mixed;

    /**
     * next
     * advances current to the next node if possible
     */
    public function next(): void;

    /**
     * rewind
     * initializes the iterator
     */
    public function rewind(): void;

    /**
     * valid
     * @return bool
     */
    public function valid(): bool;
}
