<?php

namespace pvc\interfaces\struct\tree\dto;

interface TreenodeDtoInterface
{
    public function getNodeId(): int;
    public function getParentId(): ?int;
}