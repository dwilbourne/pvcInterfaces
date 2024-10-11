<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeMapItemInterface
 */
interface NodeMapItemInterface
{
    /**
     * setParentId
     * @param int|null $parentId
     */
    public function setParentId(?int $parentId): void;

    /**
     * getParentId
     * @return int|null
     */
    public function getParentId(): ?int;

    /**
     * setNode
     * @param NodeVisitableInterface $node
     */
    public function setNode(NodeVisitableInterface $node): void;

    /**
     * getNode
     * @return NodeVisitableInterface
     */
    public function getNode(): NodeVisitableInterface;
}
