<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\collection;

interface CollectionElementInterface
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