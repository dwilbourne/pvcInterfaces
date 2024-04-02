<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class NodeSearchInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 */
interface NodeSearchInterface
{
    /**
     * setStartNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $node
     */
    public function setStartNode(TreenodeAbstractInterface $node): void;

    /**
     * getStartNode
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>|null
     */
    public function getStartNode(): TreenodeAbstractInterface|null;

    /**
     * setSearchStrategy
     * @param NodeSearchStrategyInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $strategy
     */
    public function setSearchStrategy(NodeSearchStrategyInterface $strategy): void;

    /**
     * getSearchStrategy
     * @return NodeSearchStrategyInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>
     */
    public function getSearchStrategy(): NodeSearchStrategyInterface;

    /**
     * setSearchFilter
     * @param NodeFilterInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $filter
     */
    public function setSearchFilter(NodeFilterInterface $filter): void;

    /**
     * getSearchFilter
     * @return NodeFilterInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>
     */
    public function getSearchFilter(): NodeFilterInterface;
    /**
     * getNodes
     * gets all the nodes at once
     * @return array<int, TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>>
     */
    public function getNodes(): array;

    /**
     * current
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType>|null
     */
    public function current(): TreenodeAbstractInterface|null;

    /**
     * key
     * @return int|null
     */
    public function key(): ?int;

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
