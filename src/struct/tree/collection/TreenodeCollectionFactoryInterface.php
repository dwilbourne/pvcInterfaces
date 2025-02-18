<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\collection;

/**
 * @template PayloadType
 */
interface TreenodeCollectionFactoryInterface
{
    /**
     * @return TreenodeCollectionInterface<PayloadType>
     */
    public function makeTreenodeCollection(): TreenodeCollectionInterface;
}
