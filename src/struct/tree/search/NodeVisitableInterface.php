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
     * initializeVisitStatus
     */
    public function initializeVisitStatus(): void;

    /**
     * getVisitStatus
     * @return VisitStatus
     */
    public function getVisitStatus(): VisitStatus;

    /**
     * setVisitStatus
     * @param VisitStatus $status
     */
    public function setVisitStatus(VisitStatus $status): void;
}
