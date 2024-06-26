<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;

/**
 * Class TreenodeValueObjectFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @template ValueObjectType of TreenodeValueObjectInterface
 */
interface TreenodeValueObjectFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeValueObjectInterface<PayloadType, ValueObjectType>
     */
    public function makeValueObject(): TreenodeValueObjectInterface;
}
