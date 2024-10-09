<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * Class TreeSearchStrategyInterface
 * @template NodeType of NodeSearchableInterface
 * @template NodeIdType of array-key
 * @extends Iterator<NodeIdType, NodeType>
 */
interface TreeSearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeType $startNode
     */
    public function setStartNode($startNode): void;

    /**
     * getStartNode
     * @return NodeType
     */
    public function getStartNode(): mixed;

    /**
     * startNodeIsSet
     * @return bool
     */
    public function startNodeIsSet(): bool;

    /**
     * current
     * @return NodeType|null
     */
    public function current(): mixed;
}
