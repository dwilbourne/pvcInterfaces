<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOUnorderedInterface;

/**
 * Class TreenodeDTOUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 */
interface TreenodeDTOUnorderedFactoryInterface
{
    /**
     * makeDTO
     * @return TreenodeDTOUnorderedInterface<PayloadType>
     */
    public function makeDTO(): TreenodeDTOUnorderedInterface;
}
