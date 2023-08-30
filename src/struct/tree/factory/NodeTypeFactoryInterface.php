<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class NodeTypeFactoryInterface
 * @template ValueType
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface NodeTypeFactoryInterface
{
    /**
     * makeNodeType
     * @param TreenodeValueObjectInterface<ValueType> $valueObject
     * @param TreeType $tree
     * @param CollectionType $collectionAbstract
     * @return NodeType
     */
    public function makeNodeType(
        TreenodeValueObjectInterface $valueObject,
        TreeAbstractInterface $tree,
        CollectionAbstractInterface $collectionAbstract
    ):
    TreenodeAbstractInterface;
}
