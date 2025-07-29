<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeSearchableInterface
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * @return NodeSearchableInterface|null
     * do not use a specific return type here (e.g. NodeSearchableInterface).
     * Different implementations of getParent will return a "wider" object,
     * and you will get a liskov substitution problem.
     */
    public function getParent();

    /**
     * getChildrenArray
     * @return array<NodeSearchableInterface>
     */
    public function getChildrenArray(): array;
}
