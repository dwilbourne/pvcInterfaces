<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\collection;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * @template PayloadType
 */
interface TreenodeCollectionFactoryInterface
{
    /**
     * @param array<TreenodeInterface<PayloadType>> $treenodes
     * @return TreenodeCollectionInterface<PayloadType>
     */
    public function makeTreenodeCollection(array $treenodes): TreenodeCollectionInterface;
}
