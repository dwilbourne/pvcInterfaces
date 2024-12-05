<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node\factory;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeDTOOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreenodeOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore
 * @extends TreenodeFactoryInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, TreenodeDTOOrderedInterface>
 */
interface TreenodeOrderedFactoryInterface extends TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeOrderedInterface<PayloadType>
     */
    public function makeNode(): TreenodeAbstractInterface;
}
