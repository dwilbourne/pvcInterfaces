<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectOrderedInterface;

/**
 * Class TreenodeValueObjectOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @extends TreenodeValueObjectFactoryInterface<PayloadType, TreenodeValueObjectOrderedInterface>
 */
interface TreenodeValueObjectOrderedFactoryInterface extends TreenodeValueObjectFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeValueObjectOrderedInterface<PayloadType>
     */
    public function makeValueObject(): TreenodeValueObjectInterface;
}
