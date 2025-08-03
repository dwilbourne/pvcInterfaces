<?php

namespace pvc\interfaces\struct\tree\node;

/**
 * @template TreenodeType of TreenodeInterface
 */
interface TreenodeChildCollectionFactoryInterface
{
    /**
     * @return TreenodeChildCollectionInterface<TreenodeType>
     */
    public function makeChildCollection(): TreenodeChildCollectionInterface;
}