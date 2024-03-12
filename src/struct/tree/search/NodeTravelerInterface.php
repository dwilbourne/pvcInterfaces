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
 * @extends SearchStrategyInterface<PayloadType, NodeType, TreeType, CollectionType>
 */
interface NodeTravelerInterface extends SearchStrategyInterface
{
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
