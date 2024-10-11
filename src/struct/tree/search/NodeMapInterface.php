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
     * getParentId
     * @param non-negative-int $nodeId
     * @return ?int
     */
    public function getParentId(int $nodeId): ?int;

    /**
     * getNode
     * @param non-negative-int $nodeId
     * @return NodeType
     */
    public function getNode(int $nodeId): mixed;

    /**
     * setNode
     * @param non-negative-int $nodeId
     * @param non-negative-int|null $parentId
     * @param NodeType $node
     */
    public function setNode(int $nodeId, ?int $parentId, mixed $node): void;

    /**
     * getIterator
     * @return Iterator
     */
    public function getIterator(): Iterator;
}
