<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node_value_object;

/**
 * Class TreenodeValueObjectDataSrcInterface
 * @template ValueType of TreenodeValueObjectInterface
 */
interface TreenodeValueObjectDataSrcInterface
{
    /**
     * getValueObjects
     * @return array<TreenodeValueObjectInterface<ValueType>>
     */
    public function getValueObjects(): array;
}
