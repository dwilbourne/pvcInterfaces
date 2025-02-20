<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

use Countable;
use Iterator;

/**
 * Class CollectionInterface.
 *
 * These interfaces (and their implementations) are written using phpstan generics.  If you use these data
 * structures, you should consider using phpstan as part of testing your code in order to ensure tpe safety.
 *
 * If you look carefully at the PHP documentation, you will see that there is an array function called array_is_list,
 * where a list is defined as an array with non-negative integer keys that start at 0 and increase in increments of 1
 * until count(array) - 1.  Pvc considers that sort of structure to be an ordered collection.  In pvc land, an
 * unordered collection also has non-negative integer keys, but the keys mean nothing in terms of creating any sort
 * of ordination among the elements.
 *
 * @template ElementType
 * @extends Iterator<int, ElementType>
 */
interface CollectionInterface extends Iterator, Countable
{
    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function getElements returns an array of all the elements in the list, keys are preserved.
     * @return array<non-negative-int, ElementType>
     */
    public function getElements(): array;

    /**
     * @param array<ElementType> $array
     * @return void
     */
    public function import(array $array): void;

    /**
     * @function getElement gets an element via its key
     *
     * @param non-negative-int $key
     * @return ElementType
     */
    public function getElement(int $key);

    /**
     * @function getKey returns the key of the first element in the collection which is equal to the argument of the
     * method call.
     *
     * You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param ElementType $element
     * @return non-negative-int
     */
    public function getKey(mixed $element, bool $strict = true): int;

    /**
     * @function getKeys returns all the keys in the list which have elements equal to the argument of
     * the method call.
     *
     * You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param ElementType $element
     * @return array<non-negative-int>
     */
    public function getKeys(mixed $element, bool $strict = true): array;

    /**
     * crud operations
     */

    /**
     * @function add adds an element into a list using a specified key.
     * @param non-negative-int $key
     * @param ElementType $element
     */
    public function add(int $key, $element): void;

    /**
     * @function update allows you to change the payload of a list element
     * list.
     *
     * @param ElementType $element
     * @param non-negative-int $key
     */
    public function update(int $key, $element): void;

    /**
     * @function delete deletes an element from the list.
     * @param non-negative-int $key
     */
    public function delete(int $key): void;

    /**
     * getIndex gets the ordinal position of the element in the list corresponding to $key
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
