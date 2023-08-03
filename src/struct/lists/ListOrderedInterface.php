<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\lists;

/**
 * Interface ListOrderedInterface is the interface for an ordered list.
 *
 * An ordered list is one where elements can be retrieved "in order", e.g. using a numeric index which defines the
 * ordinal position in the list of each of the values.
 *
 * @template ListElementType
 * @extends ListAbstractInterface<ListElementType>
 */
interface ListOrderedInterface extends ListAbstractInterface
{
    /**
     * getIndex gets the ordinal position of the element in the list correpsonding to $key
     * @param int $key
     * @return int
     */
    public function getIndex(int $key): int;

    /**
     * setIndex sets the ordinal position of an element in the list
     * @param int $key
     * @param int $newIndex
     */
    public function setIndex(int $key, int $newIndex): void;
}
