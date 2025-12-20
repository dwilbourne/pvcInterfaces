<?php

namespace pvc\interfaces\struct\treesearch;

use Countable;
use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @extends Iterator<NodeIdType, NodeType>
 */
interface NodeSearchableCollectionInterface extends Iterator, Countable
{
    public function initialize(): void;

    /**
     * current
     * @return NodeType
     * Iterator returns mixed so we need to type hint the return value here
     */
    public function current(): NodeSearchableInterface;

    /**
     * add
     * @param NodeIdType $key
     * @param  NodeType  $nodeSearchable
     *
     * @return void
     */
    public function add($key, NodeSearchableInterface $nodeSearchable): void;

    /**
     * filter
     * @param callable $callback
     * @return NodeSearchableCollectionInterface<NodeIdType, NodeType>
     */
    public function filter(callable $callback): NodeSearchableCollectionInterface;

    /**
     * getChildren
     * @return NodeSearchableCollectionInterface<NodeIdType, NodeType>
     * returns all the children of all the nodes at this level
     */
    public function getChildren(): NodeSearchableCollectionInterface;

    /**
     * __toArray
     * @return array<NodeIdType, NodeType>
     */
    public function __toArray(): array;
}