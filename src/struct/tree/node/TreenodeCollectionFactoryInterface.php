<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * @template PayloadType
 */
interface TreenodeCollectionFactoryInterface
{
    /**
     * @param TreenodeInterface $treenodes
     * @return TreenodeCollectionInterface<PayloadType>
     */
    public function makeTreenodeCollection(array $treenodes): TreenodeCollectionInterface;
}
