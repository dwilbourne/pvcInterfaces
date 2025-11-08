<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use pvc\interfaces\struct\tree\node\TreenodeCollectionInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Class NodeSearchableInterface
 * @template NodeIdType of array-key
 * @template NodeType of TreenodeInterface
 *
 * methods necessary to support searches
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return NodeIdType
     */
    public function getNodeId();

    /**
     * @return NodeType|null
     * do not use a specific return type here (e.g. NodeSearchableInterface).
     * Different implementations of getParent will return a "wider" object,
     * and you will get a liskov substitution problem.
     */
    public function getParent();

    /**
     * getChildren
     * @return TreenodeCollectionInterface<NodeIdType, NodeType>
     */
    public function getChildren(): TreenodeCollectionInterface;

}
