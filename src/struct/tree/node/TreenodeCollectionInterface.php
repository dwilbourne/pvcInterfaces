<?php

namespace pvc\interfaces\struct\tree\node;

use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @extends Iterator<NodeIdType, NodeType>
 */
interface TreenodeCollectionInterface extends Iterator
{
    public function isEmpty() : bool;

    /**
     * @param NodeIdType $nodeId
     * @return NodeType|null
     */
    public function getNode($nodeId): ?TreenodeInterface;

    /**
     * toArray
     * @return array<NodeIdType, NodeType>
     */
    public function toArray(): array;

    /**
     * add
     * @param NodeIdType $nodeId
     * @param NodeType $node
     *
     * @return void
     */
    public function add($nodeId, $node): void;

    /**
     * delete
     * @param NodeIdType $nodeId
     *
     * @return void
     */
    public function delete($nodeId): void;

    /**
     * filter
     * @param callable $callback
     * @return TreenodeCollectionInterface<NodeIdType, NodeType>
     *
     * returns a collection of all the children of the nodes in this collection
     */
    public function filter(callable $callback): TreenodeCollectionInterface;
}