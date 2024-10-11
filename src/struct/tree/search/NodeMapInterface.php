<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class NodeMapInterface
 * @template NodeType of NodeSearchableInterface
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
     * getNodeDepth
     * @param non-negative-int $nodeId
     * @return non-negative-int
     */
    public function getDepth($nodeId): int;

    /**
     * getParentId
     * @param non-negative-int $nodeId
     * @return int
     */
    public function getParentId(int $nodeId): int;

    /**
     * getNode
     * @param non-negative-int $nodeId
     * @return NodeType
     */
    public function getNode(int $nodeId): mixed;

    /**
     * setNode
     * @param non-negative-int $nodeId
     * @param non-negative-int $parentId
     * @param NodeType $node
     * @param non-negative-int $depth
     */
    public function setNode(int $nodeId, int $parentId, mixed $node, int $depth): void;

    /**
     * getIterator
     * @return Iterator
     */
    public function getIterator(): Iterator;
}
