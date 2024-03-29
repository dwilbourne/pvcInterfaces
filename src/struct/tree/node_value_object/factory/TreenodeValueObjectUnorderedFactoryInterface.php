<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeValueObjectUnorderedInterface;

/**
 * Class TreenodeValueObjectUnorderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @extends TreenodeValueObjectFactoryInterface<PayloadType, TreenodeValueObjectUnorderedInterface>
 */
interface TreenodeValueObjectUnorderedFactoryInterface extends TreenodeValueObjectFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeValueObjectUnorderedInterface<PayloadType>
     */
    public function makeValueObject(): TreenodeValueObjectInterface;
}
