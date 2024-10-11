<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class SearchInterface
 * @template NodeType of NodeSearchableInterface
 */
interface SearchInterface
{
    /**
     * setStartNode
     * @param NodeType $node
     */
    public function setStartNode($node): void;

    /**
     * getStartNode
     * @return NodeType|null
     */
    public function getStartNode(): mixed;

    /**
     * setSearchStrategy
     * @param SearchStrategyInterface<NodeType> $strategy
     */
    public function setSearchStrategy(SearchStrategyInterface $strategy): void;

    /**
     * getSearchStrategy
     * @return SearchStrategyInterface<NodeType>
     */
    public function getSearchStrategy(): SearchStrategyInterface;

    /**
     * setSearchFilter
     * @param NodeFilterInterface<NodeType> $nodeFilter
     */
    public function setSearchFilter(NodeFilterInterface $nodeFilter): void;

    /**
     * getSearchFilter
     * @return NodeFilterInterface<NodeType>
     */
    public function getSearchFilter(): NodeFilterInterface;

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

    /**
     * key
     * @return int|null
     */
    public function key(): int|null;

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
