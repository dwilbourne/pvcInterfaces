<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class NodeMapInterface
 * @template NodeType of NodeInterface
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
     * @param NodeItemInterface<NodeType> $nodeItem
     */
    public function setNodeItem(int $nodeId, NodeItemInterface $nodeItem): void;

    /**
     * getNodeItem
     * @return NodeItemInterface<NodeType>
     */
    public function getNodeItem(): NodeItemInterface;

    /**
     * getIterator
     * @return Iterator
     */
    public function getIterator(): Iterator;
}
