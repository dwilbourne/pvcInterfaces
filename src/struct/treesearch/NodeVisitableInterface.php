<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

use pvc\interfaces\struct\collection\CollectionAbstractInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class NodeVisitableInterface
 * @template PayloadType of HasPayloadInterface
 * @template CollectionType of CollectionAbstractInterface
 * @extends NodeSearchableInterface<PayloadType, CollectionType, NodeVisitableInterface>
 */
interface NodeVisitableInterface extends NodeSearchableInterface
{
    /**
     * getVisitStatus
     * @return non-negative-int
     */
    public function getVisitStatus(): int;

    /**
     * neverVisited
     * @return bool
     */
    public function neverVisited(): bool;

    /**
     * partiallyVisited
     * @return bool
     */
    public function partiallyVisited(): bool;

    /**
     * fullyVisited
     * @return bool
     */
    public function fullyVisited(): bool;
    /**
     * setVisitStatus
     * @param non-negative-int $status
     */
    public function setVisitStatus(int $status): void;
}
