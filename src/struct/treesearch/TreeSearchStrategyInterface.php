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
 * @extends Iterator<NodeSearchableInterface>
 */
interface TreeSearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeSearchableInterface<PayloadType, CollectionType> $startNode
     */
    public function setStartNode($startNode): void;

    /**
     * getStartNode
     * @return NodeSearchableInterface<PayloadType, CollectionType>
     */
    public function getStartNode(): mixed;

    /**
     * startNodeIsSet
     * @return bool
     */
    public function startNodeIsSet(): bool;

    /**
     * current
     * @return NodeSearchableInterface<PayloadType, CollectionType>|null
     */
    public function current(): mixed;
}
