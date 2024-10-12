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
     * setNodeItem
     * @param non-negative-int $nodeId
     * @param NodeMapItemInterface $nodeItem
     */
    public function setNodeItem(int $nodeId, NodeMapItemInterface $nodeItem): void;

    /**
     * getNodeItem
     * @param non-negative-int $nodeId
     * @return NodeMapItemInterface
     */
    public function getNodeItem(int $nodeId): NodeMapItemInterface;

    /**
     * getNodes
     * @return array<int, NodeVisitableInterface>
     */
    public function getNodes(): array;
}
