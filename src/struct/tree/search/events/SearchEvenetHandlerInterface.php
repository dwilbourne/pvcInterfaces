<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search\events;

use pvc\interfaces\struct\tree\search\NodeSearchableInterface;

/**
 * Class SearchEvenetHandlerInterface
 */
interface SearchEvenetHandlerInterface
{
    /**
     * beforeVisitNode
     * @param NodeSearchableInterface $node
     */
    public function beforeVisitNode(NodeSearchableInterface $node): void;

    /**
     * afterVisitNode
     * @param NodeSearchableInterface $node
     */
    public function afterVisitNode(NodeSearchableInterface $node): void;
}
