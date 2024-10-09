<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * Class TreeSearchStrategyInterface
 * @template NodeIdType of array-key
 *
 * @extends Iterator<NodeIdType, NodeSearchableInterface>
 */
interface TreeSearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeSearchableInterface $startNode
     */
    public function setStartNode($startNode): void;

    /**
     * getStartNode
     * @return NodeSearchableInterface
    NodeSearchableInterface
    public function getStartNode(): mixed;

    /**
     * startNodeIsSet
     * @return bool
     */
    public function startNodeIsSet(): bool;

    /**
     * current
     * @return NodeSearchableInterface|null
     */
    public function current(): mixed;
}
