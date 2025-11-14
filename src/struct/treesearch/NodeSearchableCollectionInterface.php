<?php

namespace pvc\interfaces\struct\treesearch;

use Countable;
use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @template CollectionType of NodeSearchableCollectionInterface
 * @extends Iterator<NodeIdType, NodeType>
 */
interface NodeSearchableCollectionInterface extends Iterator, Countable
{
    public function initialize(): void;

    /**
     * add
     * @param  NodeType  $nodeSearchable
     *
     * @return void
     */
    public function add(NodeSearchableInterface $nodeSearchable): void;

    /**
     * filter
     * @param callable $callback
     * @return CollectionType
     */
    public function filter(callable $callback): NodeSearchableCollectionInterface;

    /**
     * getChildren
     * @return CollectionType
     */
    public function getChildren(): NodeSearchableCollectionInterface;

    /**
     * getNthChild
     * @return NodeType|null
     */
    public function getNth(): ?NodeSearchableInterface;

    /**
     * __toArray
     * @return array<NodeIdType, NodeType>
     */
    public function __toArray(): array;
}