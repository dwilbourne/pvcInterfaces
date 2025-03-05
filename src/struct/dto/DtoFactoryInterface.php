<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\dto;

interface DtoFactoryInterface
{
    /**
     * @param array<mixed>|object $source
     * @return DtoInterface
     */
    public function makeDto(array|object $source): DtoInterface;
}
