<?php declare(strict_types = 1);

namespace pvc\interfaces\struct\tree;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

interface TreeInterface
{
    /**
     * @function getTreeId
     * @return int
     */
    public function getTreeId() : int;

    /**
     * @function setTreeId
     * @param int $id
     */
    public function setTreeId(int $id): void;

    /**
     * @function getRoot
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface|null
     */
    public function getRoot(): ?TreenodeInterface;

    /**
     * @function getNode
     * @param int $nodeid
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface|null
     */
    public function getNode(int $nodeid): ?TreenodeInterface;

    /**
     * @function hasNode
     * @param TreenodeInterface $node
     * @return bool
     */
    public function hasNode(TreenodeInterface $node) : bool;

    /**
     * @function getNodes
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface[]
     */
    public function getNodes(): array;

    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function hydrateNodes
     * @param array $nodeCollection
     * @return void
     */
    public function hydrateNodes(array $nodeCollection) : void;

    /**
     * @function dehydrateNodes
     * @return array
     */
    public function dehydrateNodes(): array;

    /**
     * @function nodeCount
     * @return int
     */
    public function nodeCount(): int;

    /**
     * @function getParentOf
     * @param \pvc\interfaces\struct\tree\node\TreenodeInterface $node
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface|null
     */
    public function getParentOf(TreenodeInterface $node): ?TreenodeInterface;

    /**
     * @function getChildrenOf
     * @param \pvc\interfaces\struct\tree\node\TreenodeInterface $parent
     * @return array
     */
    public function getChildrenOf(TreenodeInterface $parent): array;

    /**
     * @function hasLeafWithId
     * @param int $nodeid
     * @return bool
     */
    public function hasLeafWithId(int $nodeid): bool;

    /**
     * @function hasInteriorNodeWithId
     * @param int $nodeid
     * @return bool
     */
    public function hasInteriorNodeWithId(int $nodeid): bool;

    /**
     * @function addNode
     * @param \pvc\interfaces\struct\tree\node\TreenodeInterface $node
     */
    public function addNode(TreenodeInterface $node): void;

    /**
     * @function deleteNode
     * @param \pvc\interfaces\struct\tree\node\TreenodeInterface $node
     * @param bool $deleteBranchOK
     */
    public function deleteNode(TreenodeInterface $node, bool $deleteBranchOK = false): void;

    /**
     * @function getTreeDepthFirst
     * @param \pvc\interfaces\struct\tree\node\TreenodeInterface|null $startNode
     * @param callable|null $callback
     * @return array[]TreenodeInterface
     */
    public function getTreeDepthFirst(TreenodeInterface $startNode = null, callable $callback = null): array;

    /**
     * @function getTreeBreadthFirst
     * @param \pvc\interfaces\struct\tree\node\TreenodeInterface|null $startNode
     * @param callable|null $callback
     * @param int|null $levels
     * @return array[]TreenodeInterface
     */
    public function getTreeBreadthFirst(
        TreenodeInterface $startNode = null,
        callable $callback = null,
        int $levels = null
    ): array;

    /**
     * @function getLeaves
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface[]
     */
    public function getLeaves(): array;

    /**
     * @function getInteriorNodes
     * @return \pvc\interfaces\struct\tree\node\TreenodeInterface[]
     */
    public function getInteriorNodes(): array;
}
