<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\PayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class NodeTypeFactoryInterface
 * @template ValueType of PayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface NodeTypeFactoryInterface
{
    /**
     * makeNodeType
     * @param TreenodeValueObjectInterface<ValueType> $valueObject
     * @param TreeAbstractInterface<ValueType, NodeType, TreeType, CollectionType> $tree
     * @param CollectionAbstractInterface<ValueType, CollectionType> $collectionAbstract
     * @return TreenodeAbstractInterface<ValueType, NodeType, TreeType, CollectionType>
     */
    public function makeNodeType(
        TreenodeValueObjectInterface $valueObject,
        TreeAbstractInterface $tree,
        CollectionAbstractInterface $collectionAbstract
    ): TreenodeAbstractInterface;
}
