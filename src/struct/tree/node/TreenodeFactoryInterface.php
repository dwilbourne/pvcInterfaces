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
 * @template NodeType of TreenodeInterface
 */
interface TreenodeFactoryInterface
{
    /**
     * makeNode
     * @return TreenodeInterface<NodeIdType, TreeIdType, NodeType>
     */
    public function makeNode();
}
