<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\factory;

use pvc\interfaces\struct\payload\ValidatorPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;

/**
 * Class TreenodeValueObjectFactoryInterface
 * @template ValueType of ValidatorPayloadInterface
 */
interface TreenodeValueObjectFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeValueObjectInterface<ValueType>
     */
    public function makeValueObject(): TreenodeValueObjectInterface;
}
