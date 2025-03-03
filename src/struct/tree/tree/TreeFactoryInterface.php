<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\collection\CollectionElementInterface;
use pvc\interfaces\struct\collection\CollectionFactoryInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TreeFactoryInterface
 * @template PayloadType
 * CollectionFactory needs to remain generic here - the factory will make both a TreenodeDtoCollection and
 * a TreenodeCollection
 * @template ElementType of CollectionElementInterface
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param CollectionFactoryInterface<ElementType> $collectionFactory
     * @param int $treeId
     * @param ?array<TreenodeDtoInterface<PayloadType>> $dtoArray
     * @param ?ValTesterInterface<PayloadType> $payloadTester,
     * @return TreeInterface<PayloadType>
     */
    public static function makeTree(
        CollectionFactoryInterface $collectionFactory,
        int                        $treeId,
        ?array                      $dtoArray = [],
        ?ValTesterInterface $payloadTester = null,
    ): TreeInterface;
}
