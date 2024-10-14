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
     * @param NodeVisitableInterface $node
     */
    public function setNode(int $nodeId, ?int $parentId, NodeVisitableInterface $node): void;

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
     * @param int $nodeId
     * @return NodeVisitableInterface|null
     */
    public function getNode(int $nodeId): ?NodeVisitableInterface;
}
