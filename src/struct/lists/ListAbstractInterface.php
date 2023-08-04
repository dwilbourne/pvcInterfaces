<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\lists;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * Class ListAbstractInterface provides the generic behaviors for lists.
 *
 * These interfaces (and their implementations) are written using phpstan generics.  If you use these data
 * structures, you should consider using phpstan as part of testing your code in order to ensure tpe safety.
 *
 * If you look carefully at the PHP documentation, you will see that there is n array function called array_is_list,
 * where a list is defined as an array with keys that go from 0 to count(array) - 1. Pvc considers that sort of
 * structure to be an ordered list.  In pvc land, an unordered list also has integer keys, but the keys mean nothing in
 * terms of creating any sort of ordination among the elements.
 *
 * @template ListType
 * @template ListElementType
 * @extends Iterator<ListElementType>
 * @extends ArrayAccess<ListElementType>
 */
interface ListAbstractInterface extends Iterator, ArrayAccess, Countable
{
    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function getElements returns an array of all the elements in the list, keys are preserved.
     * @return array<non-negative_int, ListElementType>
     */
    public function getElements(): array;


    /**
     * @function getElement gets an element via its key.
     *
     * @param non-negative-int $key
     * @return ListElementType
     */
    public function getElement(int $key);

    /**
     * @function getFirstKey returns the key of the first element in the list which is equal to the argument of the
     * method call.  You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param ListElementType $listElement
     * @return non-negative-int|null
     */
    public function getFirstKey(mixed $listElement, bool $strict = true): int|null;

    /**
     * @function getAllKeys returns all the keys in the list which have elements equal to the argument of
     * the method call.  You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param ListElementType $listElement
     * @return array<non-negative-int>
     */
    public function getAllKeys(mixed $listElement, bool $strict = true): array;

    /**
     * @function setKey allows you to change the key of an element in the list.
     * @param non-negative-int $oldKey
     * @param non-negative-int $newKey
     */
    public function setKey(int $oldKey, int $newKey): void;

    /**
     * crud operations
     */

    /**
     * @function add adds an element into a list using a specified key.
     * @param non-negative-int $key
     * @param ListElementType $value
     */
    public function add(int $key, $value): void;

    /**
     * @function update allows you to change the value of a list element
     * list.
     *
     * @param ListElementType $value
     * @param non-negative-int $key
     */
    public function update(int $key, $value): void;

    /**
     * @function delete deletes an element from the list.
     * @param non-negative-int $key
     */
    public function delete(int $key): void;

    /**
     * @function push adds a value to the end of the list.
     * @param ListElementType $value
     */
    public function push($value): void;

}