<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use Iterator;
use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class SearchStrategyInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 * @extends Iterator<NodeSearchableInterface>
 */
interface SearchStrategyInterface extends Iterator
{
    /**
     * setStartNode
     * @param NodeSearchableInterface<PayloadType, CollectionType> $startNode
     */
    public function setStartNode(NodeSearchableInterface $startNode): void;

    /**
     * getStartNode
     * @return ?NodeSearchableInterface<PayloadType, CollectionType>
     */
    public function getStartNode(): ?NodeSearchableInterface;

    /**
     * current
     * @return NodeSearchableInterface<PayloadType, CollectionType>|null
     */
    public function current(): NodeSearchableInterface;
}
