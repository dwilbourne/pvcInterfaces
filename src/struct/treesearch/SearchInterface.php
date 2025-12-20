<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;

/**
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @template CollectionType of NodeSearchableCollectionInterface
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
     * @return CollectionType
     */
    public function getNodes(): NodeSearchableCollectionInterface;

    /**
     * setMaxLevels - controls how deep in the tree the search will go
     * @param  non-negative-int  $maxLevels
     *
     * @return void
     */
    public function setMaxLevels(int $maxLevels): void;

    /**
     * getMaxLevels
     * @return non-negative-int
     */
    public function getMaxLevels(): int;

    /**
     * atMaxLevels
     * @return bool
     */
    public function atMaxLevels(): bool;

    /**
     * getCurrentLevel
     * @return non-negative-int
     */
    public function getCurrentLevel(): int;
}
