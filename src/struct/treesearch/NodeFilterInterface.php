<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class NodeFilterInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 * @template NodeType of NodeSearchableInterface
 */
interface NodeFilterInterface
{
    /**
     * testNode
     * @param NodeSearchableInterface<PayloadType, CollectionType, NodeType> $node
     * @return bool
     */
    public function testNode($node): bool;
}
