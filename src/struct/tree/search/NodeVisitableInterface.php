<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeVisitableInterface
 * @extends NodeInterface<NodeVisitableInterface>
 */
interface NodeVisitableInterface extends NodeInterface
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
