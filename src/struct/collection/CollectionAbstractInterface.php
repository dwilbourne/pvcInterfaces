<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

use Countable;
use Iterator;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class CollectionAbstractInterface provides the generic behaviors for collections.
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
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType
 * @extends Iterator<int, PayloadType>
 */
interface CollectionAbstractInterface extends Iterator, Countable
{
    /**
     * @function isEmpty
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @function getElements returns an array of all the elements in the list, keys are preserved.
     * @return array<non-negative-int, PayloadType>
     */
    public function getElements(): array;


    /**
     * @function getElement gets an element via its key
     *
     * @param non-negative-int $key
     * @return PayloadType
     */
    public function getElement(int $key);

    /**
     * @function getKey returns the key of the first element in the collection which is equal to the argument of the
     * method call.
     *
     * You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param PayloadType $listElement
     * @return non-negative-int|null
     */
    public function getKey(mixed $listElement, bool $strict = true): int|null;

    /**
     * @function getKeys returns all the keys in the list which have elements equal to the argument of
     * the method call.
     *
     * You can control whether you want to use strict or loose comparison via the $strict parameter.
     *
     * @param PayloadType $listElement
     * @return array<non-negative-int>
     */
    public function getKeys(mixed $listElement, bool $strict = true): array;

    /**
     * crud operations
     */

    /**
     * @function add adds an element into a list using a specified key.
     * @param non-negative-int $key
     * @param PayloadType $payload
     */
    public function add(int $key, $payload): void;

    /**
     * @function update allows you to change the payload of a list element
     * list.
     *
     * @param PayloadType $payload
     * @param non-negative-int $key
     */
    public function update(int $key, $payload): void;

    /**
     * @function delete deletes an element from the list.
     * @param non-negative-int $key
     */
    public function delete(int $key): void;

    /**
     * @function push adds a payload to the end of the list.
     * @param PayloadType $payload
     */
    public function push($payload): void;
}
