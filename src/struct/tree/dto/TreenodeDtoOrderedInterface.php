<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @phpstan-type TreenodeDtoShape object{nodeId: non-negative-int, parentId: ?non-negative-int, treeId: ?non-negative-int, index:non-negative-int}
 */
interface TreenodeDtoOrderedInterface extends TreenodeDtoInterface
{
    public function getIndex(): int;
}