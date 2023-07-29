<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\range_collection;

/**
 * @interface RangeCollectionInterface<RangeElementType, RangeElementDataType> defines the interface for
 * RangeCollection.
 *
 * A "range" is a simple data structure with a min and a max. And so a RangeCollection is
 * just a collection of RangeElements.  Originally, this structure was inspired by a windows print dialog, where you
 * can specify ranges of pages to print (e.g. 1-3, 5, 9 - 24).  The class is created using phpstan generics to
 * preserve data type consistency within a RangeCollection.  If you are using this class and its related data typed
 * RangeElements (child classes of RangeElement), you should consider using phpstan to run a static analysis on your
 * code as part of your testing to insure type consistency.
 *
 * @see RangeElementInterface
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
