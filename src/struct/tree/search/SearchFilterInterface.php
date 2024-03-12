<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

use pvc\interfaces\struct\tree\node\TreenodeAbstractInterfaceHasHas;

/**
 * Class SearchFilterInterface
 * @template NodeType of TreenodeAbstractInterfaceHasHas
 */
interface SearchFilterInterface
{
    /**
     * testNode
     * @param NodeType $node
     * @return bool
     */
    public function testNode(TreenodeAbstractInterfaceHasHas $node): bool;
}
