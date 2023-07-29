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
 * Interface ListUnorderedInterface is the interface for an unordered list.
 *
 * An unordered list has a defined set of operations (behaviors) but does not do anything about keeping the list
 * elements in any particular order. For the purposes of accessing elements within the list, you can supply a numeric
 * index or use the method getElementByValue.  Like its cousin ListOrderedInterface, this is written using phpstan
 * generics.  If you use this data structure, you should consider using phpstan as part of your testing in order to
 * ensure type safety in your code.
 *
 * @template ListElementType
 * @extends Iterator<int, ListElementType>
 * @extends ArrayAccess<int, ListElementType>
 */
interface ListUnorderedInterface extends Iterator, ArrayAccess, Countable
{
    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function getElement retrieves an element located at a specific position in the list (e.g. the fourth element).
     * @param int $key
     * @return ListElementType
     */
    public function getElement(int $key);

    /**
     * @function getElementByValue returns the position of the first element in the list which is strictly equal to the
     * argument of the method call (e.g. ===).
     *
     * @param mixed $value
     * @return int|null
     */
    public function getElementByValue($value): int|null;

    /**
     * @function getElements returns an array of all the elements in the list, keys are preserved.
     * @return ListElementType[]
     */
    public function getElements(): array;

    /**
     * @function getKeys returns a list of all the keys to the elements in the list.
     * @return int[]
     */
    public function getKeys(): array;
    /**
     * crud operations.  In order to keep the semantics the same, the return values for these methods
     * mirror those for offsetSet and offsetUnset
     */

    /**
     * @function add adds an element to the list using a key supplied as an arguement to the method.
     *
     * The method throws a DuplicateKeyException if the key already exists in the list.
     *
     * @param int $key
     * @param ListElementType $value
     */
    public function add(int $key, $value): void;

    /**
     * @function update updates the value of the element have the key supplied in the argument list.
     *
     * The method throws a NonExistentKeyException if the key does not exist in the list.
     *
     * @param int $key
     * @param ListElementType $value
     */
    public function update(int $key, $value): void;

    /**
     * @function delete dletes the element that has the key supplied in the argument list.
     *
     * The method throws a NonExistentKeyException if the key does not exist in the list.
     *
     * @param int $key
     */
    public function delete(int $key): void;

    /**
     * @function push adds an element to the end of the list.
     *
     * The key for this element is automatically generated.
     *
     * @param ListElementType $value
     */
    public function push($value): void;
}
