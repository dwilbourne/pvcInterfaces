<?php

namespace pvc\interfaces\struct\tree\node;

use Countable;
use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @extends Iterator<NodeIdType, NodeType>
 */
interface TreenodeCollectionInterface extends Iterator, Countable
{
    /**
     * initialize
     *
     * @param  array<NodeIdType, NodeType>|null  $array
     *
     * @return void
     */
    public function initialize(?array $array = []): void;

    /**
     * isEmpty
     * @return bool
     */
    public function isEmpty(): bool;


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
}