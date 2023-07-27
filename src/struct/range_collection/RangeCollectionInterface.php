<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * Interface RangeCollectionInterface defines the interface for RangeCollection.
 *
 * A "range" is a simple data structure with a min and a max.  Originally, this structure was inspired by a windows
 * print dialog, where you can specify ranges of pages to print (e.g. 1-3, 5, 9 - 24).  For more suggestions on
 * potential uses, see the overview documentation at https://pvcstruct.readthedocs.io/en/latest
 *
 * @template RangeElementType
 * @template RangeElementDataType
 */
interface RangeCollectionInterface
{
    /**
     * @function getRangeElements returns an array of all the RangeElements in the collection
     * @return array<RangeElementInterface<RangeElementType, RangeElementDataType>>
     */
    public function getRanges(): array;

    /**
     * @function addRange adds a RangeElement to the collection.
     * @param RangeElementInterface<RangeElementType, RangeElementDataType> $rangeElement
     */
    public function addRange(RangeElementInterface $rangeElement): void;
}
