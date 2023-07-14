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
 * Interface ListUnorderedInterface
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
     * @function getElement
     * @param int $key
     * @return ListElementType
     */
    public function getElement(int $key);

    /**
     * @function getElements
     * @return ListElementType[]
     */
    public function getElements(): array;

    /**
     * @function getKeys
     * @return int[]
     */
    public function getKeys(): array;
    /**
     * crud operations.  In order to keep the semantics the same, the return values for these methods
     * mirror those for offsetSet and offsetUnset
     */

    /**
     * @function add
     * @param int $key
     * @param ListElementType $value
     */
    public function add(int $key, $value): void;

    /**
     * @function update
     * @param int $key
     * @param ListElementType $value
     */
    public function update(int $key, $value): void;

    /**
     * @function delete
     * @param int $key
     */
    public function delete(int $key): void;

    /**
     * @function push
     * @param ListElementType $value
     */
    public function push($value): void;
}
