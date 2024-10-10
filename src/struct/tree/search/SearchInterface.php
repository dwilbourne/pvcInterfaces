<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class SearchInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface SearchInterface
{
    /**
     * setStartNode
     * @param NodeSearchableInterface<PayloadType, CollectionType> $node
     */
    public function setStartNode($node): void;

    /**
     * getStartNode
     * @return NodeSearchableInterface<PayloadType, CollectionType>|null
     */
    public function getStartNode(): mixed;

    /**
     * setSearchStrategy
     * @param SearchStrategyInterface<PayloadType, CollectionType> $strategy
     */
    public function setSearchStrategy(SearchStrategyInterface $strategy): void;

    /**
     * getSearchStrategy
     * @return SearchStrategyInterface<PayloadType, CollectionType>
     */
    public function getSearchStrategy(): SearchStrategyInterface;

    /**
     * setSearchFilter
     * @param NodeFilterInterface<PayloadType, CollectionType> $nodeFilter
     */
    public function setSearchFilter(NodeFilterInterface $nodeFilter): void;

    /**
     * getSearchFilter
     * @return NodeFilterInterface<PayloadType, CollectionType>
     */
    public function getSearchFilter(): NodeFilterInterface;

    /**
     * getNodes
     * gets all the nodes at once
     * @return array<int, NodeSearchableInterface<PayloadType, CollectionType>>
     */
    public function getNodes(): array;

    /**
     * current
     * @return NodeSearchableInterface<PayloadType, CollectionType>|null
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
