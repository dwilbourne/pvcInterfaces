<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\tree;

use pvc\interfaces\struct\tree\node\TreenodeInterface;

/**
 * Class TreeFactoryInterface
 * @phpstan-import-type TreenodeDtoShape from TreenodeInterface
 */
interface TreeFactoryInterface
{
    /**
     * makeTree
     * @param int $treeId
     * @param ?array<TreenodeDtoShape> $dtoArray
     * @return TreeInterface
     */
    public static function makeTree(
        int                        $treeId,
        ?array                      $dtoArray = [],
    ): TreeInterface;
}
