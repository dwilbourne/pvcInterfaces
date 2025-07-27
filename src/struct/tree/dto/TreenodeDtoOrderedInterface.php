<?php

namespace pvc\interfaces\struct\tree\dto;

interface TreenodeDtoOrderedInterface extends TreenodeDtoInterface
{
    public function getIndex(): int;
}