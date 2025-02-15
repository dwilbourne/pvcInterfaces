<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\dto\DtoFactoryInterface;

/**
 * @template PayloadType
 */
interface TreenodeDtoFactoryInterface extends DtoFactoryInterface
{
    /**
     * @return TreenodeDtoInterface<PayloadType>
     */
    public function makeDto(): TreenodeDtoInterface;
}