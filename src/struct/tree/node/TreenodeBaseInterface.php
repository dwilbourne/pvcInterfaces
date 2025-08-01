<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionInterface;
use pvc\interfaces\struct\tree\tree\TreeInterface;
use pvc\interfaces\struct\treesearch\NodeVisitableInterface;

/**
 * Interface TreenodeInterface defines the basic operations for a generic tree node.
 *
 * @template TreenodeType of TreenodeBaseInterface
 * @template CollectionType of CollectionInterface
 * @template TreeType of TreeInterface
 *
 * @see CollectionInterface
 */
interface TreenodeBaseInterface extends NodeVisitableInterface
{
    /**
     * @return non-negative-int
     * unique identifier for the node
     */
    public function getNodeId(): int;

    /**
     * @param ?TreenodeType $parent
     * parent node must be in the same tree.
     *
     * @return void
     */
    public function setParent(?TreenodeBaseInterface $parent): void;

    /**
     * @function getParent
     * @return TreenodeType|null
     */
    public function getParent(): ?TreenodeBaseInterface;

    /**
     * @function getChildren
     * @return CollectionType<TreenodeType>
     */
    public function getChildren(): CollectionInterface;


}
