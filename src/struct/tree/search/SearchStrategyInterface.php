<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;
use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;

/**
 * Class StrategyInterface
 * @template NodeType of TreenodeAbstractInterface
 * @extends Iterator<int, NodeType>
 */
interface SearchStrategyInterface extends Iterator
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
     * getNodes
     * gets all the nodes at once
     * @return array<NodeType>
     */
    public function getNodes(): array;
}
