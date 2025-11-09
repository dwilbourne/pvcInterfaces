<?php

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @extends Iterator<NodeIdType, NodeType>
 */
interface NodeSearchableCollectionInterface extends Iterator
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
     * __toArray
     * @return array<NodeIdType, NodeType>
     */
    public function __toArray(): array;
}