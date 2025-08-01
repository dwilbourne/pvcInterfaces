<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;
use pvc\interfaces\struct\tree\node\TreenodeBaseInterface;

/**
 * Interface TreeInterface defines the operations common to trees
 *
 * Trees have an id, allowing you to work with multiple trees at once.  Each tree consist of "nodes".
 * If it does have nodes, then there must be a single root node.  All
 * nodes, including the root node, can have zero or more child nodes.  All nodes except the root
 * must have a single parent.
 *
 * @template TreenodeType of TreenodeBaseInterface
 * @template CollectionType of CollectionInterface
 */
interface TreeInterface
{
    /**
     * @param non-negative-int $treeId
     * @return void
     * initializes the tree so it is ready to use
     */
    public function initialize(int $treeId): void;

    /**
     * addNode puts a node into the tree's list of nodes.
     *
     * @param TreenodeType $node
     * @param TreenodeType $parent
     */
    public function addNode(TreenodeBaseInterface $node, TreenodeBaseInterface $parent): void;

    /**
     * @function deleteNode
     * @param non-negative-int $nodeId
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
     * @return array<TreenodeType>
     */
    public function dehydrate(): array;

    /**
     * @function getNodes
     * @return array<TreenodeType>
     */
    public function getNodeCollection(): array;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param non-negative-int $nodeId
     * @return TreenodeType|null
     */
    public function getNode(int $nodeId): TreenodeBaseInterface|null;

    /**
     * @function getRoot
     * @return   TreenodeType|null
     */
    public function getRoot();

}
