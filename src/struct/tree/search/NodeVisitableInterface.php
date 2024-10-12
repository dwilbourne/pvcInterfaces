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
     * @return int<0, 2>
     */
    public function getVisitStatus(): int;

    /**
     * setVisitStatus
     * @param int<0, 2> $status
     */
    public function setVisitStatus(int $status): void;
}
