<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\PayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreeAbstractEventHandlerInterface
 * @template ValueType of PayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface TreeAbstractEventHandlerInterface
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
     * @param TreenodeAbstractInterface<ValueType, NodeType, TreeType, CollectionType> $node
     */
    public function beforeAddNode(TreenodeAbstractInterface $node): void;

    /**
     * afterAddNode
     * @param TreenodeAbstractInterface<ValueType, NodeType, TreeType, CollectionType> $node
     */
    public function afterAddNode(TreenodeAbstractInterface $node): void;
}
