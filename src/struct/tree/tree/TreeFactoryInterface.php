<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionFactoryInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoSorterInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TreeFactoryInterface
 * @template PayloadType
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param CollectionFactoryInterface<PayloadType> $collectionFactory
     * @param ValTesterInterface<PayloadType> $payloadTester,
     * @param TreenodeDtoSorterInterface<PayloadType> $sorter
     * @param int $treeId
     * @param array<TreenodeDtoInterface<PayloadType>> $dtoArray
     * @return TreeInterface<PayloadType>
     */
    public static function makeTree(
        CollectionFactoryInterface $collectionFactory,
        ValTesterInterface $payloadTester,
        TreenodeDtoSorterInterface $sorter,
        int                        $treeId,
        array                      $dtoArray,
    ): TreeInterface;
}
