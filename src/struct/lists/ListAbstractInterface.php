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
 * where a list is defined as an array with keys that go from 0 to count(array) - 1. Pv c considers that sort of
 * structure to be an ordered list.  An unordered list also has integer keys, but the keys mean nothing in terms of
 * creating any sort of ordination among the elements.
 *
 * @template ListElementType
 * @extends Iterator<int, ListElementType>
 * @extends ArrayAccess<int, ListElementType>
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
     * @return array<ListElementType>
     */
    public function getElements(): array;


    /**
     * @function getElement gets an element via its key.
     *
     * @param int $key
     * @return ListElementType
     */
    public function getElement(int $key);

    /**
     * @function getFirstKey returns the key of the first element in the list which is strictly equal to the
     * argument of the method call (e.g. ===).
     *
     * @param <ListElementType> $listElement
     * @return int|null
     */
    public function getFirstKey($listElement): int|null;

    /**
     * getAllKeys
     * @param <ListElementType> $listElement
     * @return array<int>
     */
    public function getAllKeys($listElement): array;

    /**
     * @function setKey allows you to change the key of an element in the list.
     * @param int $oldKey
     * @param int $newKey
     */
    public function setKey(int $oldKey, int $newKey): void;

    /**
     * crud operations
     */

    /**
     * @function add adds an element into a list using a specified key.
     * @param int $key
     * @param ListElementType $value
     */
    public function add(int $key, $value): void;

    /**
     * @function update allows you to change the value of a list element
     * list.
     *
     * @param ListElementType $value
     * @param int $key
     */
    public function update(int $key, $value): void;

    /**
     * @function delete deletes an element from the list.
     * @param int $key
     */
    public function delete(int $key): void;

    /**
     * @function push adds a value to the end of the list.
     * @param ListElementType $value
     */
    public function push($value): void;

}