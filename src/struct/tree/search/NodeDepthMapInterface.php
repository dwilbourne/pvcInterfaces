<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class NodeDepthMapInterface
 * @template KeyType<array-key>
 *
 * nodes can have primary keys which are either integers or strings.
 */
interface NodeDepthMapInterface
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
     * @param KeyType $nodeId
     * @return non-negative-int|null
     */
    public function getNodeDepth($nodeId): ?int;

    /**
     * setNodeDepth
     * @param KeyType $nodeId
     * @param non-negative-int $depth
     */
    public function setNodeDepth($nodeId, int $depth): void;

    /**
     * getIterator
     * @return Iterator
     */
    public function getIterator(): Iterator;
}
