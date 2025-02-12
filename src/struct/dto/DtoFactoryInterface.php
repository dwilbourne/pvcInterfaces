<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 */
interface DtoFactoryInterface
{
    /**
     * @return DtoInterface<PayloadType>
     */
    public function makeDto(): DtoInterface;
}
