<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

use Countable;
use Iterator;
use pvc\interfaces\struct\types\id\IdTypeInterface;
use pvc\interfaces\struct\types\value\ValTesterInterface;

/**
 * Class CollectionInterface.
 *
 * These interfaces (and their implementations) are written using phpstan generics.  If you use these data
 * structures, you should consider using phpstan as part of testing your code in order to ensure type safety.
 *
 * In the PHP documentation, you will see that there is an array function called array_is_list,
 * where a list is defined as an array with non-negative integer keys that start at 0 and increase in increments of 1
 * until count(array) - 1.  Pvc considers that sort of structure to be an ordered collection.  In pvc land, an
 * unordered collection also has non-negative integer keys, but the keys mean nothing in terms of creating any sort
 * of ordination among the elements.
 *
 * @template TKey of array-key
 * @template ElementType
 * @extends Iterator<ElementType>
 */
interface CollectionInterface extends Iterator, Countable, IdTypeInterface
{
    /**
     * @param ?callable $comparator
     *
     * @return void
     */
    public function setComparator($comparator): void;

    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function getElement gets an element via its key.  Because null and false and any other value you can think
     * of are legitimate types of elements, the implementing code will throw an exception if the key does not
     * exist.  There is no sensible return value that indicates the operation failed.
     *
     * @param TKey $key
     * @return ElementType
     */
    public function getElement($key): mixed;

    /**
     * @function getElements returns an array of all the elements in the list, keys are preserved.
     * @return array<ElementType>
     */
    public function getElements(): array;

    /**
     * @function findElementKey returns the key of the first element in the collection where the ValTester
     * argument returns true when applied to the element.  Returns null if the element is not found in the collection.
     *
     * @param ValTesterInterface $valTester
     * @return TKey|null
     */
    public function findElementKey(ValTesterInterface $valTester);

    /**
     * hasKey
     * @param TKey $key
     *
     * @return bool
     */
    public function hasKey($key): bool;

    /**
     * @function findElementKeys returns all the keys for elements in the collection where the ValTester
     * argument returns true when applied to the element. Returns an empty array when no element in the
     * collection passes the test.
     *
     * @param ValTesterInterface $valTester
     * @return array<TKey>
     */
    public function findElementKeys(ValTesterInterface $valTester): array;

    /**
     * getIndex gets the ordinal position of the element in the list corresponding to $key
     * @param TKey $key
     * @return int
     */
    public function getIndex($key): int;

    /**
     * crud operations
     */

    /**
     * @function add puts an element into the collection.
     * @param TKey $key
     * @param ElementType $element
     */
    public function add($key, $element): void;

    /**
     * @function update allows you to change the payload of an element in the collection.
     *
     * @param ElementType $element
     * @param TKey $key
     */
    public function update($key, $element): void;

    /**
     * @function delete deletes an element from the collection.
     * @param TKey $key
     */
    public function delete($key): void;

    /**
     * the following relate to the ordinal position of the
     * element in the list
     */

    /**
     * @param non-negative-int $index
     * @return ElementType|null
     */
    public function getNth(int $index): mixed;

    /**
     * @return ElementType|null
     */
    public function getFirst(): mixed;

    /**
     * @return ElementType|null
     */
    public function getLast(): mixed;

}
