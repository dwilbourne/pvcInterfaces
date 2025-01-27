<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeMapInterface
 *
 * This is clumsy, but NodeSearchableInterface has no notion of a parentid, which is done in order to keep search as
 * generic as possible.  For example, if you are searching a conventional file system, the parent directory is not
 * typed as an integer - it's a directory.  So this map is used as part of allocating nodeIds / parentIds.
 *
 * @phpstan-type NodeMapRow array{parentId:non-negative-int|null, node:NodeSearchableInterface}
 */
interface NodeMapInterface
{
    /**
     * initialize
     */
    public function initialize(): void;

    /**
     * isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * setNode
     * @param non-negative-int $nodeId
     * @param non-negative-int|null $parentId
     * @param NodeSearchableInterface $node
     */
    public function setNode(int $nodeId, ?int $parentId, NodeSearchableInterface $node): void;

    /**
     * getParentId
     * @param non-negative-int $nodeId
     * @return int|null
     */
    public function getParentId(int $nodeId): ?int;

    /**
     * getParent
     * @param int $nodeId
     * @return NodeSearchableInterface|null
     */
    public function getParent(int $nodeId): ?NodeSearchableInterface;

    /**
     * getNode
     * @param ?int $nodeId
     * @return NodeSearchableInterface|null
     */
    public function getNode(?int $nodeId): ?NodeSearchableInterface;

    /**
     * getNodeMapAsArray
     * @return array<non-negative-int, NodeMapRow>
     */
    public function getNodeMapAsArray(): array;
}
