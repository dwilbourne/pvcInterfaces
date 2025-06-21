<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

interface TreenodeCollectionFactoryInterface
{
    /**
     * @param array<TreenodeInterface> $treenodes
     * @return TreenodeCollectionInterface<TreenodeInterface>
     */
    public function makeTreenodeCollection(array $treenodes = []): TreenodeCollectionInterface;
}
