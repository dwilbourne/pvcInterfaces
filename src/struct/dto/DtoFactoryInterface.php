<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\dto;

interface DtoFactoryInterface
{
    /**
     * @return DtoInterface
     */
    public function makeDto(): DtoInterface;
}
