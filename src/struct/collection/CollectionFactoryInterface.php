<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * Class CollectionFactoryInterface
 * @template TKey
 * @template ElementType
 * @template CollectionType of CollectionInterface
 */
interface CollectionFactoryInterface
{
    /**
     * makeCollection
     * @param array<TKey, ElementType> $elements
     * @return CollectionType<TKey, ElementType>
     */
    public function makeCollection(array $elements = []);
}
