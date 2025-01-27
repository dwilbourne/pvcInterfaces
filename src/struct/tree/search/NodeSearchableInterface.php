<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeSearchableInterface
 * @template NodeType
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * getChildrenArray
     * @return array<NodeType>
     */
    public function getChildrenArray(): array;
}
