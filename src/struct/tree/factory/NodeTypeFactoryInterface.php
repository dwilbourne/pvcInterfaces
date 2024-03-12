<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterfaceHasHas;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterfaceHas;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class NodeTypeFactoryInterface
 * @template ValueType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterfaceHasHas
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface NodeTypeFactoryInterface
{
    /**
     * makeNodeType
     * @param TreenodeValueObjectInterfaceHas<ValueType> $valueObject
     * @param TreeAbstractInterface<ValueType, NodeType, TreeType, CollectionType> $tree
     * @param CollectionAbstractInterface<ValueType, CollectionType> $collectionAbstract
     * @return TreenodeAbstractInterfaceHasHas<ValueType, NodeType, TreeType, CollectionType>
     */
    public function makeNodeType(
        TreenodeValueObjectInterfaceHas $valueObject,
        TreeAbstractInterface $tree,
        CollectionAbstractInterface $collectionAbstract
    ): TreenodeAbstractInterfaceHasHas;
}
