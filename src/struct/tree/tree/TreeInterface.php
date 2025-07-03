<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\dto\DtoInterface;
use pvc\interfaces\struct\tree\node\TreenodeFactoryInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Interface TreeInterface defines the operations common to all trees, both ordered and unordered.
 *
 * Trees have an id, allowing you to work with multiple trees at once.  Each tree consist of "nodes".
 * If it does have nodes, then there must be a single root node.  All
 * nodes, including the root node, can have zero or more child nodes.  All nodes except the root
 * must have a single parent.
 *
 * @template PayloadType
 * @template TreenodeType of TreenodeInterface
 * @template TreeType of TreeInterface
 * @template CollectionType of CollectionInterface
 * @phpstan-import-type TreenodeDtoShape from TreenodeInterface
 */
interface TreeInterface
{
    /**
     * @return bool
     * returns false if the tree is in an invalid state (e.g. has been constructed but not initialized)
     */
    public function isInitialized(): bool;

    /**
     * @param non-negative-int $treeId
     * @param array<TreenodeDtoShape&DtoInterface> $dtos
     * @return void
     * initializes the tree so it is ready to use
     */
    public function initialize(int $treeId, array $dtos = []): void;

    /**
     * @function getTreeId
     * @return non-negative-int
     */
    public function getTreeId(): int;

    /**
     * @return TreenodeFactoryInterface<PayloadType, TreenodeType, TreeType, CollectionType>
     * there is an edge case that comes up when trying to get the siblings collection of the root node.  Because root
     * has no parent, there is no existing collection of the parent's children to get.  So we need to be able to
     * make a collection on the fly and put the root node into it.  TreenodeFactory has a CollectionFactory, so
     * we need public access to TreenodeFactory in order to implement the getSiblings method in TreenodeInterface
     */
    public function getTreenodeFactory(): TreenodeFactoryInterface;

    /**
     * addNode puts a dto into the tree's list of nodes.
     *
     * @param DtoInterface $dto
     */
    public function addNode(DtoInterface $dto): void;

    /**
     * @function deleteNode
     * @param non-negative-int $nodeId
     * @param bool $deleteBranchOK
     */
    public function deleteNode($nodeId, bool $deleteBranchOK = false): void;

    /**
     * @function getNodes
     * @return array<TreenodeInterface<PayloadType, TreenodeType, TreeType, CollectionType>>
     */
    public function getNodes(): array;

    /**
     * @function getNode returns the node in the tree whose id is $nodeid or null if there is no such node.
     * @param non-negative-int|null $nodeId
     * @return TreenodeInterface<PayloadType, TreenodeType, TreeType, CollectionType>|null
     */
    public function getNode(?int $nodeId): TreenodeInterface|null;

    /**
     * @function getRoot
     * @return   TreenodeInterface<PayloadType, TreenodeType, TreeType, CollectionType>|null
     */
    public function getRoot(): ?TreenodeInterface;

    /**
     * rootTest
     * @param TreenodeInterface<PayloadType, TreenodeType, TreeType, CollectionType>|DtoInterface $nodeItem
     * @return bool
     */
    public function rootTest(TreenodeInterface|DtoInterface $nodeItem): bool;

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
