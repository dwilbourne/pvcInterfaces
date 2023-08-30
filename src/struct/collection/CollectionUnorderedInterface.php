<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * Interface CollectionUnorderedInterface is the interface for an unordered list.
 *
 * An unordered list has a defined set of operations (behaviors) but does not do anything about keeping the list
 * elements in any particular order.
 *
 * @template ElementType
 * @extends CollectionAbstractInterface<ElementType, CollectionUnorderedInterface>
 */
interface CollectionUnorderedInterface extends CollectionAbstractInterface
{
}
