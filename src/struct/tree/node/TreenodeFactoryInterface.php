<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\collection\TreenodeCollectionFactoryInterface;

/**
 * Class TreenodeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeInterface<PayloadType>
     */
    public function makeNode(): TreenodeInterface;

    /**
     * @return TreenodeCollectionFactoryInterface<PayloadType>
     * this is in here for an edge case where someone is trying to get the siblings of the root node of the tree.
     * Because root has no siblings (e.g. there is no parent and thus there is no collection of siblings) we need
     * to be abel to make an empty Collection to return when someone asks for the siblings of the root.
     */
    public function getCollectionFactory(): TreenodeCollectionFactoryInterface;
}
