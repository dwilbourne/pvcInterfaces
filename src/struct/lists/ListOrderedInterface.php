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
 * Interface ListOrderedInterface is the interface for an ordered list.
 *
 * An ordered list is one where elements can be retrieved "in order", e.g. using a numeric index which defines the
 * ordinal position in the list of each of the values.  The list provides operations that create a list, add elements
 * into a specified ordinal position (e.g. insert an element into the third position in a list), delete elements, etc.
 * This data structure is written using generics via phpstan.  If you use this data structure, you should consider
 * using phpstan for static analysis of your code as part of your testing in order to ensure type safety.
 *
 * @template ListElementType
 * @extends Iterator<int, ListElementType>
 * @extends ArrayAccess<int, ListElementType>
 */
interface ListOrderedInterface extends Iterator, ArrayAccess, Countable
{
    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function getElement gets the element at a specific ordinal position within the list, e.g. the second element.
     * @param int $key
     * @return ListElementType
     */
    public function getElement(int $key);

    /**
     * @function getElements returns all elements in the list in the correct order.
     * @return array<int, ListElementType>
     */
    public function getElements(): array;

    /**
     * crud operations
     */

    /**
     * @function add adds an element into a specific position within the list.
     * @param int $key
     * @param ListElementType $value
     */
    public function add(int $key, $value): void;

    /**
     * @function update allows you to change the value of a list element
     * list.
     *
     * @param int $key
     * @param ListElementType $value
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

    /**
     * @function changeIndex allows you to change the position of an element in the list.
     * @param int $oldIndex
     * @param int $newIndex
     */
    public function changeIndex(int $oldIndex, int $newIndex): void;
}
