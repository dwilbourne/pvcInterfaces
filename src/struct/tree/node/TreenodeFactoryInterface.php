<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeFactoryInterface
 * @template NodeIdType of array-key
 * @template TreeIdType of array-key
 * @template PayloadType
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeInterface<NodeIdType, TreeIdType, PayloadType>
     */
    public function makeNode();
}
