<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\lists;

/**
 * Interface ListOrderedInterface is the interface for an ordered list.
 *
 * An ordered list is one where elements can be retrieved "in order", e.g. using sequentially increasing integer
 * indices which define the ordinal position of each of the values in the list.
 *
 * Conceptually, "indices" are separate from "keys".  In pvc's current implementation of ordered lists, keys and
 * indices are the same thing.  But in a different implementation that might not be the case, so the nomenclature
 * distinuishes between the two.
 *
 * @template ListElementType
 * @extends ListAbstractInterface<ListElementType>
 */
interface ListOrderedInterface extends ListAbstractInterface
{
    /**
     * getIndex gets the ordinal position of the element in the list correpsonding to $key
     * @param non-negative-int $key
     * @return non-negative-int
     */
    public function getIndex(int $key): int;

    /**
     * setIndex sets the ordinal position of an element in the list
     * @param non-negative-int $key
     * @param non-negative-int $newIndex
     */
    public function setIndex(int $key, int $newIndex): void;
}
