<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Interface TreenodeOrderedInterface defines the operations for "ordered" tree nodes, e.g. the children of each node
 * are kept in a specific order
 *
 * @template ValueType
 * @extends TreenodeAbstractInterface<ValueType, TreenodeOrderedInterface, TreeOrderedInterface,
 *     CollectionOrderedInterface>
 */
interface TreenodeOrderedInterface extends TreenodeAbstractInterface
{
    /**
     * @function setIndex sets the ordinal position of this node in the ordered list of siblings.
     *
     * If the index supplied is greater than any of the existing indices, then the node is tacked on to the end of the
     * list.
     *
     * @param non-negative-int $index
     */
    public function setIndex(int $index): void;

    /**
     * @function getIndex gets the ordinal position of this node in the ordered list of siblings
     * @return non-negative-int
     */
    public function getIndex(): int;
}
