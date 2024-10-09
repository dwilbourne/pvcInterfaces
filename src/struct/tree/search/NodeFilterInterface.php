<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

/**
 * Class NodeFilterInterface
 * @template NodeType
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
