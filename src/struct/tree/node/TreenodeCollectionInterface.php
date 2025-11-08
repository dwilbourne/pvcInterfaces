<?php

namespace pvc\interfaces\struct\tree\node;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 */
interface TreenodeCollectionInterface
{
    public function isEmpty() : bool;

    /**
     * @param NodeIdType $key
     * @return NodeType|null
     */
    public function getElement($key): ?TreenodeInterface;

    /**
     * getElements
     * @return array<NodeIdType, NodeType>
     */
    public function getElements(): array;

    /**
     * getNth
     * @param  non-negative-int  $index
     *
     * @return NodeType
     */
    public function getNth(int $index): TreenodeInterface;

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
     * getChildren
     * @return TreenodeCollectionInterface<NodeIdType, NodeType>
     *
     * returns a collection of all the children of the nodes in this collection
     */
    public function getChildren(): TreenodeCollectionInterface;
}