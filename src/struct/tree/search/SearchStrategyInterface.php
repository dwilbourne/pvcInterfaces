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
 * Class StrategyInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 * @extends Iterator<int, TreenodeAbstractInterface>
 */
interface SearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType> $node
     */
    public function setStartNode(TreenodeAbstractInterface $node): void;

    /**
     * getStartNode
     * @return TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType>|null
     */
    public function getStartNode(): TreenodeAbstractInterface|null;

    /**
     * getNodes
     * gets all the nodes at once
     * @return array<TreenodeAbstractInterface<PayloadType, NodeType, TreeType, CollectionType>>
     */
    public function getNodes(): array;
}
