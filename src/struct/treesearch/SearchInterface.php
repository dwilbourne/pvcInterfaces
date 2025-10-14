<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * @template NodeType of NodeSearchableInterface
 * @extends Iterator<NodeType>
 */
interface SearchInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeType $startNode
     */
    public function setStartNode(mixed $startNode): void;

    /**
     * getNodes
     * gets all the nodes at once
     * @return array<NodeType>
     */
    public function getNodes(): array;
}
