<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object\factory;

use pvc\interfaces\struct\payload\HasPayloadInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeDTOInterface;
use pvc\interfaces\struct\tree\node_value_object\TreenodeDTOOrderedInterface;

/**
 * Class TreenodeDTOOrderedFactoryInterface
 * @template PayloadType of HasPayloadInterface
 * @extends TreenodeDTOFactoryInterface<PayloadType, TreenodeDTOOrderedInterface>
 */
interface TreenodeDTOOrderedFactoryInterface extends TreenodeDTOFactoryInterface
{
    /**
     * makeValueObject
     * @return TreenodeDTOOrderedInterface<PayloadType>
     */
    public function makeValueObject(): TreenodeDTOInterface;
}
