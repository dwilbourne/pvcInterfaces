<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\collection;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeCollectionFactoryInterface
{
    /**
     * @return TreenodeCollectionInterface<PayloadType>
     */
    public function makeCollection(): TreenodeCollectionInterface;
}
