<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;
use pvc\interfaces\struct\tree\tree\TreeAbstractInterface;

/**
 * Class NodeTravelerInterface
 * @template PayloadType of HasPayloadInterface
 * @template NodeType of TreenodeAbstractInterface
 * @template TreeType of TreeAbstractInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface NodeTravelerInterface
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
     * setSearchStrategy
     * @param SearchStrategyInterface<PayloadType, NodeType, TreeType, CollectionType> $strategy
     */
    public function setSearchStrategy(SearchStrategyInterface $strategy): void;

    /**
     * getSearchStrategy
     * @return SearchStrategyInterface<PayloadType, NodeType, TreeType, CollectionType>
     */
    public function getSearchStrategy(): SearchStrategyInterface;

    /**
     * setSearchFilter
     * @param SearchFilterInterface<NodeType> $filter
     */
    public function setSearchFilter(SearchFilterInterface $filter): void;

    /**
     * getSearchFilter
     * @return SearchFilterInterface<NodeType>
     */
    public function getSearchFilter(): SearchFilterInterface;
}
