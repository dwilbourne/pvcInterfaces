<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeMapInterface
 * helper object for DepthFirst Searches
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
     * @param int $nodeId
     * @return NodeSearchableInterface|null
     */
    public function getNode(int $nodeId): ?NodeSearchableInterface;
}
