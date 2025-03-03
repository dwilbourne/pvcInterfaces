<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * @template PayloadType
 */
interface TreenodeCollectionFactoryInterface
{
    /**
     * @param array<TreenodeInterface<PayloadType>> $treenodes
     * @return TreenodeCollectionInterface<TreenodeInterface<PayloadType>>
     */
    public function makeTreenodeCollection(array $treenodes = []): TreenodeCollectionInterface;
}
