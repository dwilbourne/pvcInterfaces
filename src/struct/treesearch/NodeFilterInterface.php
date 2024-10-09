<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\treesearch;

/**
 * Class NodeFilterInterface
 */
interface NodeFilterInterface
{
    /**
     * testNode
     * @param NodeSearchableInterface $node
     * @return bool
     */
    public function testNode($node): bool;
}
