<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class TreeFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param int $treeId
     * @return TreeInterface<PayloadType>
     */
    public function makeTree(int $treeId): TreeInterface;
}
