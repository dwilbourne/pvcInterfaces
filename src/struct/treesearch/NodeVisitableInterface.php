<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeVisitableInterface
 *
 * NodeVisitableInterface is required in order to support depth-first searches.  Nodes need to implement
 * this interface so that the search can know whether the node has never been visited, has been visited at least once,
 * or whether it has been 'fully visited' meaning that you have arrived at it and all of its children have also
 * been fully visited.  See the VisitStatus enum.
 *
 * @template NodeIdType of array-key
 *
 * @extends NodeSearchableInterface<NodeIdType, NodeVisitableInterface>
 */
interface NodeVisitableInterface extends NodeSearchableInterface
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
