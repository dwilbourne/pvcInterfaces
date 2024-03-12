<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\tree\node\TreenodeAbstractInterfaceHasHas;

/**
 * Class NodeTravelerInterface
 * @template NodeType of TreenodeAbstractInterfaceHasHas
 * @extends SearchStrategyInterface<NodeType>
 */
interface NodeTravelerInterface extends SearchStrategyInterface
{
    /**
     * setSearchStrategy
     * @param SearchStrategyInterface<NodeType> $strategy
     */
    public function setSearchStrategy(SearchStrategyInterface $strategy): void;

    /**
     * getSearchStrategy
     * @return SearchStrategyInterface<NodeType>
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
