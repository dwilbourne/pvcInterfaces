<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOOrderedInterface;

/**
 * Class TreenodeDTOOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeDTOOrderedFactoryInterface
{
    /**
     * makeDTO
     * @return TreenodeDTOOrderedInterface<PayloadType>
     */
    public function makeDTO(): TreenodeDTOOrderedInterface;
}
