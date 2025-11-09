<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoCollectionInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Interface TreeInterface defines the operations common to trees
 *
 * Trees have an id, allowing you to work with multiple trees at once. It is
 * typed as a generic array-key so it can be used in an array or collection.
 *
 * Each tree consist of "nodes".
 * If it does have nodes, then there must be a single root node.  All
 * nodes, including the root node, can have zero or more child nodes.  All nodes except the root
 * must have a single parent.
 *
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @template TreeIdType of array-key
 * @template TreeType of TreeInterface
 */
interface TreeInterface
{
    /**
     * getTreeId
     * @return TreeIdType
     */
    public function getTreeId();

    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @param TreeIdType $treeId
     * @return void
     * initializes the tree so it is ready to use
     */
    public function initialize($treeId): void;

    /**
     * addNode puts a node into the tree's list of nodes.
     * @param NodeType $node
     */
    public function addNode(TreenodeInterface $node): void;

    /**
     * @function deleteNode
     * @param NodeIdType $nodeId
     * @param bool $deleteBranchOK
     */
    public function deleteNode($nodeId, bool $deleteBranchOK = false): void;


    /**
     * hydrate
     * @param  TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>  $dtoCollection
     *
     * @return void
     */
    public function hydrate(TreenodeDtoCollectionInterface $dtoCollection): void;

    /**
     * dehydrate
     * @return TreenodeDtoCollectionInterface<NodeIdType, TreeIdType>
     */
    public function dehydrate(): TreenodeDtoCollectionInterface;

    /**
     * @function getNodes
     * @return CollectionInterface<NodeIdType, NodeType>
     */
    public function getNodeCollection(): CollectionInterface;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param NodeIdType $nodeId
     * @return NodeType|null
     */
    public function getNode($nodeId): TreenodeInterface|null;

    /**
     * @function getRoot
     * @return   NodeType|null
     */
    public function getRoot();
}
