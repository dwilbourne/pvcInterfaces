<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\dto\DtoInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Interface TreeInterface defines the operations common to trees
 *
 * Trees have an id, allowing you to work with multiple trees at once.  Each tree consist of "nodes".
 * If it does have nodes, then there must be a single root node.  All
 * nodes, including the root node, can have zero or more child nodes.  All nodes except the root
 * must have a single parent.
 *
 * @template TreenodeType of TreenodeInterface
 * @template CollectionType of CollectionInterface
 * @phpstan-import-type TreenodeDtoShape from TreenodeInterface
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
     * @function getTreeId
     * @return non-negative-int
     */
    public function getTreeId(): int;

    /**
     * @return CollectionInterface<TreenodeType>
     * there is an edge case that comes up when trying to get the siblings collection of the root node.  Because root
     * has no parent, there is no existing collection of the parent's children to get.  So we need to be able to
     * make a collection on the fly and put the root node into it.
     */
    public function makeCollection(): CollectionInterface;

    /**
     * addNode puts a node into the tree's list of nodes.
     *
     * @param TreenodeType|TreenodeDtoInterface $nodeDto
     */
    public function addNode(TreenodeInterface|TreenodeDtoInterface $nodeDto): void;

    /**
     * @param  array<TreenodeType|TreenodeDtoShape>  $array
     *
     * @return void
     */
    public function hydrate(array $array): void;

    /**
     * @function deleteNode
     * @param non-negative-int $nodeId
     * @param bool $deleteBranchOK
     */
    public function deleteNode($nodeId, bool $deleteBranchOK = false): void;

    /**
     * @function getNodes
     * @return array<TreenodeType>
     */
    public function getNodes(): array;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param non-negative-int|null $nodeId
     * @return TreenodeType|null
     */
    public function getNode(?int $nodeId): TreenodeInterface|null;

    /**
     * @function getRoot
     * @return   TreenodeType|null
     */
    public function getRoot();

    /**
     * rootTest
     *
     * @param  TreenodeType|TreenodeDtoShape $nodeItem
     *
     * @return bool
     */
    public function rootTest($nodeItem): bool;

    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function nodeCount
     * @return non-negative-int
     */
    public function nodeCount(): int;
}
