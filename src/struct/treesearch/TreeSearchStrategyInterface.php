<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use Iterator;
use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class TreeSearchStrategyInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template NodeType of NodeSearchableInterface
 *
 * @extends Iterator<NodeSearchableInterface>
 */
interface TreeSearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeSearchableInterface<PayloadType, CollectionType, NodeType> $startNode
     */
    public function setStartNode($startNode): void;

    /**
     * getStartNode
     * @return NodeSearchableInterface<PayloadType, CollectionType, NodeType>
     */
    public function getStartNode(): mixed;

    /**
     * startNodeIsSet
     * @return bool
     */
    public function startNodeIsSet(): bool;

    /**
     * current
     * @return NodeSearchableInterface<PayloadType, CollectionType, NodeType>|null
     */
    public function current(): mixed;
}
