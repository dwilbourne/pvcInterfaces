<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeMapInterface
 *
 * NodeMapInterface and NodeVisitableInterface are used in depth-first searches.
 *
 * The nature of a depth first search is such that you need to
 * be able to traverse from a child node to a parent node after you have 'hit bottom'.
 * NodeVisitableInterface has no notion of a parent or a parentId.  This is true in order to keep search as
 * generic as possible.  For example, if you are searching a conventional file system, the parent directory is not
 * typed as an integer - it's a directory.  So this map is used as part of allocating nodeIds / parentIds to
 * whatever is being searched so that is possible to move up and down the tree with integer pointers.  In turn,
 * this facilitates inserting the nodes into a pvc tree structure for further manipulation.
 *
 * @phpstan-type NodeMapRow array{parentId:non-negative-int|null, node:NodeVisitableInterface}
 */
interface NodeMapInterface
{
    /**
     * initialize with the start node
     */
    public function initialize(NodeVisitableInterface $node): void;

    /**
     * setNode
     * @param NodeVisitableInterface $node
     * @param non-negative-int|null $parentId
     */
    public function setNode(NodeVisitableInterface $node, ?int $parentId): void;

    /**
     * getParentId
     * @param non-negative-int $nodeId
     * @return int|null
     */
    public function getParentId(int $nodeId): ?int;

    /**
     * getParent
     * @param int $nodeId
     * @return NodeVisitableInterface|null
     */
    public function getParent(int $nodeId): ?NodeVisitableInterface;

    /**
     * getNode
     * @param ?int $nodeId
     * @return NodeVisitableInterface|null
     */
    public function getNode(?int $nodeId): ?NodeVisitableInterface;

    /**
     * getNodeMapArray
     * @return array<non-negative-int, NodeMapRow>
     */
    public function getNodeMapArray(): array;
}
