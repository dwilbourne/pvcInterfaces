<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class NodeTypeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 */
interface NodeTypeFactoryInterface
{
    /**
     * makeNodeType
     * @param TreenodeValueObjectInterface<ValueObjectType, PayloadType> $valueObject
     * @param TreeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $tree
     * @param CollectionAbstractInterface<PayloadType, CollectionType> $collectionAbstract
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType>
     */
    public function makeNodeType(
        TreenodeValueObjectInterface $valueObject,
        TreeAbstractInterface $tree,
        CollectionAbstractInterface $collectionAbstract
    ): TreenodeAbstractInterface;
}
