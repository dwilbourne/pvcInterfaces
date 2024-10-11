<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;

/**
 * Class SearchStrategyInterface
 * @template NodeType of NodeInterface
 * @extends Iterator<NodeType>
 */
interface SearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeType $startNode
     */
    public function setStartNode(mixed $startNode): void;

    /**
     * getStartNode
     * @return NodeType|null
     */
    public function getStartNode(): mixed;

    /**
     * current
     * @return NodeType|null
     */
    public function current(): mixed;
}
