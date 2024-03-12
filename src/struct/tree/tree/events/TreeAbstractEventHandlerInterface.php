<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\events;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterfaceHasHas;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class TreeAbstractEventHandlerInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterfaceHasHas
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface TreeAbstractEventHandlerInterface
{
    /**
     * beforeDeleteNode
     * @param TreenodeAbstractInterfaceHasHas<PayloadType, NodeType, TreeType, CollectionType> $node
     */
    public function beforeDeleteNode(TreenodeAbstractInterfaceHasHas $node): void;

    /**
     * afterDeleteNode
     * @param TreenodeAbstractInterfaceHasHas<PayloadType, NodeType, TreeType, CollectionType> $node
     */
    public function afterDeleteNode(TreenodeAbstractInterfaceHasHas $node): void;

    /**
     * beforeAddNode
     * @param TreenodeAbstractInterfaceHasHas<PayloadType, NodeType, TreeType, CollectionType> $node
     */
    public function beforeAddNode(TreenodeAbstractInterfaceHasHas $node): void;

    /**
     * afterAddNode
     * @param TreenodeAbstractInterfaceHasHas<PayloadType, NodeType, TreeType, CollectionType> $node
     */
    public function afterAddNode(TreenodeAbstractInterfaceHasHas $node): void;
}
