<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDTOUnorderedInterface;

/**
 * Class TreenodeDTOUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @extends TreenodeDTOFactoryInterface<PayloadType, TreenodeDTOUnorderedInterface>
 */
interface TreenodeDTOUnorderedFactoryInterface extends TreenodeDTOFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeDTOUnorderedInterface<PayloadType>
     */
    public function makeValueObject(): TreenodeDTOInterface;
}
