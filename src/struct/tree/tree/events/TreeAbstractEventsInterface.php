<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreeAbstractEventsInterface
 * @template ValueType
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface TreeAbstractEventsInterface
{
    /**
     * beforeDeleteNode
     * @param TreenodeAbstractInterface<ValueType, NodeType, TreeType, CollectionType> $node
     */
    public function beforeDeleteNode(TreenodeAbstractInterface $node): void;

    /**
     * afterDeleteNode
     * @param TreenodeAbstractInterface<ValueType, NodeType, TreeType, CollectionType> $node
     */
    public function afterDeleteNode(TreenodeAbstractInterface $node): void;

    /**
     * beforeAddNode
     * @param TreenodeValueObjectInterface<ValueType> $valueObject
     */
    public function beforeAddNode(TreenodeValueObjectInterface $valueObject): void;

    /**
     * afterAddNode
     * @param TreenodeValueObjectInterface<ValueType> $valueObject
     */
    public function afterAddNode(TreenodeValueObjectInterface $valueObject): void;
}
