<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeDtoFactoryInterface
{
    /**
     * @return TreenodeDtoInterface<PayloadType>
     */
    public function makeDto(): TreenodeDtoInterface;
}