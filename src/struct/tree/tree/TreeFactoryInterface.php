<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\dto\TreenodeDtoSorterInterface;
use pvc\interfaces\struct\tree\node\TreenodeFactoryInterface;

/**
 * Class TreeFactoryInterface
 * @template PayloadType
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param TreenodeFactoryInterface<PayloadType> $treenodeFactory
     * @param TreenodeDtoSorterInterface<PayloadType> $sorter
     * @param int $treeId
     * @return TreeInterface<PayloadType>
     */
    public static function makeTree(
        TreenodeFactoryInterface $treenodeFactory,
        TreenodeDtoSorterInterface $sorter,
        int $treeId
    ): TreeInterface;
}
