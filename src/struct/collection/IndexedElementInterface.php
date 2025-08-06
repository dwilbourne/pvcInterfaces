<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * elements in an ordered collection must have setIndex and getIndex to support
 * the persistence of the index.  In an unordered collection, these methods
 * do nothing.
 */
interface IndexedElementInterface
{
    /**
     * @return non-negative-int
     */
    public function getIndex(): int;

    /**
     * @param non-negative-int $index
     * @return void
     */
    public function setIndex(int $index): void;
}
