<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\collection;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeCollectionInterface
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @param TreenodeInterface<PayloadType> $treenode
     * @return void
     */
    public function push(TreenodeInterface $treenode): void;

    /**
     * @return array<TreenodeInterface<PayloadType>>
     */
    public function getElements(): array;
}