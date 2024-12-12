<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree\factory;

use pvc\interfaces\struct\collection\CollectionUnorderedInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOUnorderedInterface;
use pvc\interfaces\struct\tree\node\TreenodeUnorderedInterface;
use pvc\interfaces\struct\tree\tree\TreeUnorderedInterface;

/**
 * Class TreeUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @phpcs:ignore
 * @extends TreeFactoryInterface<PayloadType, TreenodeUnorderedInterface, TreeUnorderedInterface, CollectionUnorderedInterface, TreenodeDTOUnorderedInterface>
 */
interface TreeUnorderedFactoryInterface extends TreeFactoryInterface
{
    /**
     * makeTree
     * @param int $treeId
     * @return TreeUnorderedInterface<PayloadType>
     */
    public function makeTree(int $treeId): TreeUnorderedInterface;
}
