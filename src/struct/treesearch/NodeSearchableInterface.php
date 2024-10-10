<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeSearchableInterface
 */
interface NodeSearchableInterface
{
    /**
     * getNodeId
     * @return array-key
     */
    public function getNodeId(): mixed;

    /**
     * getChildren
     * @return array<NodeSearchableInterface>
     */
    public function getChildren(): array;
}
