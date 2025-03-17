<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TreeFactoryInterface
 * @template PayloadType
 * @phpstan-import-type TreenodeDtoShape from TreenodeInterface
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param int $treeId
     * @param ?array<TreenodeDtoShape> $dtoArray
     * @param ?ValTesterInterface<PayloadType> $payloadTester,
     * @return TreeInterface<PayloadType>
     */
    public static function makeTree(
        int                        $treeId,
        ?array                      $dtoArray = [],
        ?ValTesterInterface $payloadTester = null,
    ): TreeInterface;
}
