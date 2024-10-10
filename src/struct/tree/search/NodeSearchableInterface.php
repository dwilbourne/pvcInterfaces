<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class NodeSearchableInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * getChildren
     * @return CollectionAbstractInterface<PayloadType, CollectionType>
     */
    public function getChildren(): CollectionAbstractInterface;

    /**
     * getParentId
     * @return non-negative-int
     */
    public function getParentId(): int;
}
