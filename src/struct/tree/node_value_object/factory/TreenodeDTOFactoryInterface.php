<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeDTOInterface;

/**
 * Class TreenodeDTOFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template ValueObjectType of TreenodeDTOInterface
 */
interface TreenodeDTOFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeDTOInterface<PayloadType, ValueObjectType>
     */
    public function makeValueObject(): TreenodeDTOInterface;
}
