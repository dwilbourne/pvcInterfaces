<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Interface TreenodeOrderedInterface defines the operations for "ordered" tree nodes, e.g. the children of each node
 * are kept in a specific order
 *
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore -- generics must all be on one line to be processed correctly
 * @extends TreenodeAbstractInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, TreenodeValueObjectOrderedInterface>
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

    /**
     * hydrate
     * @param TreenodeValueObjectOrderedInterface<PayloadType> $valueObject
     * @phpcs:ignore
     * @param TreeOrderedInterface<PayloadType> $tree
     */
    public function hydrate(TreenodeValueObjectInterface $valueObject, TreeAbstractInterface $tree): void;
}
