<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeItemInterface
 * @template NodeType of NodeInterface
 */
interface NodeItemInterface
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
     * @param NodeType $node
     */
    public function setNode(mixed $node): void;

    /**
     * getNode
     * @return NodeType
     */
    public function getNode(): mixed;
}
