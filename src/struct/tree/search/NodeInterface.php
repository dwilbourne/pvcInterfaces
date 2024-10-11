<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeInterface
 * @template NodeType
 */
interface NodeInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * getChildren
     * @return array<NodeType>
     */
    public function getChildrenAsArray(): array;
}
