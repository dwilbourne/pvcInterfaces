<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\factory;

use pvc\interfaces\struct\collection\CollectionOrderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOOrderedInterface;
use pvc\interfaces\struct\tree\node\factory\TreenodeFactoryInterface;
use pvc\interfaces\struct\tree\node\factory\TreenodeOrderedFactoryInterface;
use pvc\interfaces\struct\tree\node\TreenodeOrderedInterface;
use pvc\interfaces\struct\tree\tree\TreeOrderedInterface;

/**
 * Class TreeOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore
 * @extends TreeFactoryInterface<PayloadType, TreenodeOrderedInterface, TreeOrderedInterface, CollectionOrderedInterface, TreenodeDTOOrderedInterface>
 */
interface TreeOrderedFactoryInterface extends TreeFactoryInterface
{
    /**
     * makeTree
     * @param int $treeId
     * @param TreenodeOrderedFactoryInterface<PayloadType> $treenodeFactory
     * @return TreeOrderedInterface<PayloadType>
     */
    public function makeTree(int $treeId, TreenodeFactoryInterface $treenodeFactory): TreeOrderedInterface;
}
