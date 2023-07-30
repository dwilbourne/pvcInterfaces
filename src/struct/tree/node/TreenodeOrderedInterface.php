<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Interface TreenodeOrderedInterface defines the operations for "ordered" tree nodes, e.g. the children of each node
 * are kept in a specific order
 *
 * @template NodeValueType
 * @extends TreenodeAbstractInterface<TreenodeOrderedInterface, NodeValueType>
 */
interface TreenodeOrderedInterface extends TreenodeAbstractInterface
{
    /**
     * @function setIndex sets the ordinal position of this node in the ordered list of siblings
     * @param int $index
     */
    public function setIndex(int $index): void;

    /**
     * @function getIndex gets the ordinal position of this node in the ordered list of siblings
     * @return int
     */
    public function getIndex(): ?int;
}
