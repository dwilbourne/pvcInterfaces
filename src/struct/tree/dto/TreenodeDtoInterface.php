<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @phpstan-type TreenodeDtoShape object{nodeId: non-negative-int, parentId: ?non-negative-int, treeId: ?non-negative-int, index:non-negative-int}
 */
interface TreenodeDtoInterface
{
    /**
     * @return non-negative-int
     */
    public function getNodeId(): int;

    /**
     * @return non-negative-int|null
     */
    public function getParentId(): ?int;

    /**
     * @return non-negative-int
     */
    public function getTreeId(): ?int;

    /**
     * @return non-negative-int
     */
    public function getIndex(): int;
}