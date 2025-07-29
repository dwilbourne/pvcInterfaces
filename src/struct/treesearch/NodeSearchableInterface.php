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
     */
    public function getParent(): ?NodeSearchableInterface;

    /**
     * getChildrenArray
     * @return array<NodeSearchableInterface>
     */
    public function getChildrenArray(): array;
}
