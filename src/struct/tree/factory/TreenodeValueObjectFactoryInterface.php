<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterfaceHas;

/**
 * Class TreenodeValueObjectFactoryInterface
 * @template ValueType of HasPayloadInterface
 */
interface TreenodeValueObjectFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeValueObjectInterfaceHas<ValueType>
     */
    public function makeValueObject(): TreenodeValueObjectInterfaceHas;
}
