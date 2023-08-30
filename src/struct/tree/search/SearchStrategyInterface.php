<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;

/**
 * Class StrategyInterface
 * @template NodeType of TreenodeAbstractInterface
 */
interface SearchStrategyInterface
{
    /**
     * setStartNode
     * @param NodeType $node
     */
    public function setStartNode(TreenodeAbstractInterface $node): void;

    /**
     * getStartNode
     * @return NodeType|null
     */
    public function getStartNode(): TreenodeAbstractInterface|null;

    /**
     * resetSearch
     *
     * resets the "current node" to the original node from which the search started
     */
    public function resetSearch(): void;

    /**
     * getNextNode
     * gets nodes one at a time
     * @return NodeType|null
     */
    public function getNextNode(): TreenodeAbstractInterface|null;

    /**
     * getNodes
     * gets all the nodes at once
     * @return array<NodeType>
     */
    public function getNodes(): array;
}
