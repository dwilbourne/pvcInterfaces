<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use pvc\interfaces\struct\tree\core\HasNodeIdInterface;

/**
 * Class NodeSearchableInterface
 * @template NodeIdType of array-key
 * @template NodeType of NodeSearchableInterface
 * @extends HasNodeIdInterface<NodeIdType>
 *
 * methods necessary to support searches
 */
interface NodeSearchableInterface extends HasNodeIdInterface
{
    /**
     * @return NodeType|null
     * do not use a specific return type here (e.g. NodeSearchableInterface).
     * Different implementations of getParent will return a "wider" object,
     * and you will get a liskov substitution problem.
     */
    public function getParent();

    /**
     * getChildren
     * @return NodeSearchableCollectionInterface<NodeIdType, NodeType>
     */
    public function getChildren();

}
