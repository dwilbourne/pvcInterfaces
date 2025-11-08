<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use pvc\interfaces\struct\tree\node\TreenodeCollectionInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;

/**
 * Class NodeVisitableInterface
 *
 * NodeVisitableInterface is required in order to support depth-first searches.  Nodes need to implement
 * this interface so that the search can know whether the node has never been visited, has been visited at least once,
 * or whether it has been 'fully visited' meaning that you have arrived at it and all of its children have also
 * been fully visited.  See the VisitStatus enum.
 *
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 * @template TreeIdType of array-key
 * @template TreeType of TreeInterface
 * @template CollectionType of TreenodeCollectionInterface
 * @extends TreenodeInterface<NodeIdType, NodeType, TreeIdType, TreeType, CollectionType>
 */
interface NodeVisitableInterface extends TreenodeInterface
{
    /**
     * initializeVisitStatus
     */
    public function initializeVisitStatus(): void;

    /**
     * getVisitStatus
     * @return VisitStatus
     */
    public function getVisitStatus(): VisitStatus;

    /**
     * setVisitStatus
     * @param VisitStatus $status
     */
    public function setVisitStatus(VisitStatus $status): void;
}
