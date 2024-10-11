<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

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
     * @param NodeItemInterface $nodeItem
     */
    public function setNodeItem(int $nodeId, NodeItemInterface $nodeItem): void;

    /**
     * getNodeItem
     * @param non-negative-int $nodeId
     * @return NodeItemInterface
     */
    public function getNodeItem(int $nodeId): NodeItemInterface;

    /**
     * getIterator
     * @return Iterator
     */
    public function getIterator(): Iterator;
}
