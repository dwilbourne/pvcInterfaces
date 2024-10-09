<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeFilterInterface
 * @template NodeType of NodeSearchableInterface
 */
interface NodeFilterInterface
{
    /**
     * testNode
     * @param NodeType $node
     * @return bool
     */
    public function testNode($node): bool;
}
