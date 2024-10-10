<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class NodeFilterInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface NodeFilterInterface
{
    /**
     * testNode
     * @param NodeSearchableInterface<PayloadType, CollectionType> $node
     * @return bool
     */
    public function testNode($node): bool;
}
