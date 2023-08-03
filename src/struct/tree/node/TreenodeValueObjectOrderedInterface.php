<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeValueObjectOrderedInterface
 * @template NodeValueType
 * @extends TreenodeValueObjectInterface<NodeValueType>
 */
interface TreenodeValueObjectOrderedInterface extends TreenodeValueObjectInterface
{
    /**
     * getIndex retrieves the ordinal position
     * @return non-negative-int
     */
    public function getIndex(): int;
}