<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * Class TreenodeValueObjectDataSrcInterface
 * @template PayloadType of HasPayloadInterface
 * @template TreenodeValueObjectType of TreenodeValueObjectInterface
 */
interface TreenodeValueObjectDataSrcInterface
{
    /**
     * getValueObjects
     * @return array<TreenodeValueObjectInterface<TreenodeValueObjectType, PayloadType>>
     */
    public function getValueObjects(): array;
}
