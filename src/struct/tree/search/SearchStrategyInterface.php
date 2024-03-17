<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;
use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class SearchStrategyInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @extends Iterator<int, TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType>>
 */
interface SearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType> $startNode
     */
    public function setStartNode(TreenodeAbstractInterface $startNode): void;

    /**
     * getStartNode
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType>|null
     */
    public function getStartNode(): TreenodeAbstractInterface|null;

    /**
     * current
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType>|null
     */
    public function current(): TreenodeAbstractInterface|null;
}
