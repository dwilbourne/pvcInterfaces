<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node\factory;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectUnorderedInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Class TreenodeUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore
 * @extends TreenodeFactoryInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, TreenodeValueObjectUnorderedInterface>
 */
interface TreenodeUnorderedFactoryInterface extends TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeUnorderedInterface<PayloadType>
     */
    public function makeNode(): TreenodeUnorderedInterface;
}
