<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

/**
 * elements in an indexed collection must have setIndex and getIndex to support the persistence of the index
 */
interface CollectionIndexedElementInterface extends CollectionElementInterface
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
