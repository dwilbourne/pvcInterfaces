<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreeAbstractEventHandlerInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 */
interface TreeAbstractEventHandlerInterface
{
    /**
     * beforeDeleteNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $node
     */
    public function beforeDeleteNode(TreenodeAbstractInterface $node): void;

    /**
     * afterDeleteNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $node
     */
    public function afterDeleteNode(TreenodeAbstractInterface $node): void;

    /**
     * beforeAddNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $node
     */
    public function beforeAddNode(TreenodeAbstractInterface $node): void;

    /**
     * afterAddNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType, ValueObjectType> $node
     */
    public function afterAddNode(TreenodeAbstractInterface $node): void;
}
