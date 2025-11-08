<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;
use pvc\interfaces\struct\collection\CollectionInterface;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @extends Iterator<NodeIdType, NodeType>
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
     * @return CollectionInterface<NodeIdType, NodeType>
     */
    public function getNodes(): CollectionInterface;
}
