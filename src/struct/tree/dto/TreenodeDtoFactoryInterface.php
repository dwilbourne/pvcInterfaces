<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\dto\DtoFactoryInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 * @extends DtoFactoryInterface<PayloadType>
 */
interface TreenodeDtoFactoryInterface extends DtoFactoryInterface
{
    /**
     * @return TreenodeDtoInterface<PayloadType>
     */
    public function makeDto(): TreenodeDtoInterface;
}