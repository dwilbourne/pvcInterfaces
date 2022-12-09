<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\lists\ordered;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * Interface ListOrderedInterface
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
	 * @function getElement
	 * @param int $key
	 * @return ListElementType
	 */
    public function getElement(int $key);

	/**
	 * @function getElements
	 * @return array<int, ListElementType>
	 */
    public function getElements(): array;

    /**
     * @function getKeys
     * @return int[]
     */
    public function getKeys(): array;

    /**
     * crud operations
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

    /**
     * @function changeIndex
     * @param int $oldIndex
     * @param int $newIndex
     */
    public function changeIndex(int $oldIndex, int $newIndex): void;
}
