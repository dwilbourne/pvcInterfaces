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
 * In the PHP documentation, you will see that there is an array function called array_is_list,
 * where a list is defined as an array with non-negative integer keys that start at 0 and increase in increments of 1
 * until count(array) - 1.  Pvc considers that sort of structure to be an ordered collection.  In pvc land, an
 * unordered collection also has non-negative integer keys, but the keys mean nothing in terms of creating any sort
 * of ordination among the elements.
 *
 * @template ElementType
 * @extends Iterator<non-negative-int, ElementType>
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
     * @function getElement gets an element via its key.  Because null and false and any other value you can think
     * of are legitimate types of elements, the implementing code will throw an exception if the key does not
     * exist.  There is no sensible return value that indicates the operation failed.
     *
     * @param non-negative-int $key
     * @return ElementType
     */
    public function getElement(int $key): mixed;

    /**
     * @function getKey returns the key of the first element in the collection which is equal to the argument of the
     * method call.  Returns false if the element is not found in the collection.
     *
     * You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param ElementType $element
     * @return non-negative-int|false
     */
    public function getKey(mixed $element, bool $strict = true): int|false;

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
     * @function update allows you to change the payload of an element in the collection.
     *
     * @param ElementType $element
     * @param non-negative-int $key
     */
    public function update(int $key, $element): void;

    /**
     * @function delete deletes an element from the collection.
     * @param non-negative-int $key
     */
    public function delete(int $key): void;

    /**
     * the following return elements according the ordinal position of the
     * element in the list
     */

    /**
     * @param non-negative-int $index
     * @return ElementType|null
     */
    public function getNth(int $index);

    /**
     * @return ElementType|null
     */
    public function getFirst();

    /**
     * @return ElementType|null
     */
    public function getLast();

}
