<?php

namespace pvc\interfaces\struct\tree\dto;

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
    public function getTreeId(): int;
}