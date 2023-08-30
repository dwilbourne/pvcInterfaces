<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\tree\node\TreenodeAbstractInterface;

/**
 * Class SearchFilterInterface
 * @template NodeType of TreenodeAbstractInterface
 */
interface SearchFilterInterface
{
    /**
     * testNode
     * @param NodeType $node
     * @return bool
     */
    public function testNode(TreenodeAbstractInterface $node): bool;
}
