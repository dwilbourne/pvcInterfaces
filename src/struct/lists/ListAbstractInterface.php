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
     * @function getElement gets the element via its key.
     *
     * In ordered lists, keys are sequentially ascending integers.
     * In unordered lists, they are simply integers which are neither necessarily sequential nor are they kept in
     * ascending order.
     *
     * @param int $key
     * @return ListElementType
     */
    public function getElement(int $key);

    /**
     * @function getElements returns an array of all the elements in the list, keys are preserved.
     * @return array<ListElementType>
     */
    public function getElements(): array;

    /**
     * @function getElementIndex returns the position of the first element in the list which is strictly equal to the
     * argument of the method call (e.g. ===).
     *
     * @param mixed $value
     * @return int|null
     */
    public function getElementIndex($value): int|null;

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