<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class NodeDepthMapInterface
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
     * @param non-negative-int $nodeId
     * @return non-negative-int|null
     */
    public function getNodeDepth(int $nodeId): ?int;

    /**
     * setNodeDepth
     * @param non-negative-int $nodeId
     * @param non-negative-int $depth
     */
    public function setNodeDepth(int $nodeId, int $depth): void;

    /**
     * getIterator
     * @return Iterator
     */
    public function getIterator(): Iterator;
}
