<?php

namespace pvc\interfaces\struct\collection;

use ArrayIterator;

/**
 * @template KeyType of array-key
 * @template ElementType
 */
interface ArrayIteratorFactoryInterface
{
    /**
     * makeIterator
     * @param array<KeyType, ElementType> $elements
     * @return ArrayIterator<KeyType, ElementType>
     */
    public function makeIterator(array $elements): ArrayIterator;
}