<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;
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
 * @template TKey of array-key
 * @template NodeType of TreenodeInterface
 */
interface TreeInterface
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @param TKey $treeId
     * @return void
     * initializes the tree so it is ready to use
     */
    public function initialize($treeId): void;

    /**
     * addNode puts a node into the tree's list of nodes.
     *
     * @param NodeType $node
     * @param NodeType $parent
     */
    public function addNode(TreenodeInterface $node, TreenodeInterface $parent): void;

    /**
     * @function deleteNode
     * @param TKey $nodeId
     * @param bool $deleteBranchOK
     */
    public function deleteNode($nodeId, bool $deleteBranchOK = false): void;


    /**
     * @param  array<TreenodeDtoInterface>  $array
     *
     * @return void
     */
    public function hydrate(array $array): void;

    /**
     * @return array<TreenodeDtoInterface>
     */
    public function dehydrate(): array;

    /**
     * @function getNodes
     * @return CollectionInterface<TKey, NodeType>
     */
    public function getNodeCollection(): CollectionInterface;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param TKey $nodeId
     * @return NodeType|null
     */
    public function getNode($nodeId): TreenodeInterface|null;

    /**
     * @function getRoot
     * @return   NodeType|null
     */
    public function getRoot();

    /**
     * @param  NodeType|TreenodeDtoInterface  $root
     * in the course of a node getting its siblings, it needs to know whether
     * it is the root or not because the root has no parent and therefore
     * no child collection.
     * @return bool
     */
    public function rootTest(TreenodeInterface|TreenodeDtoInterface $root): bool;

}
