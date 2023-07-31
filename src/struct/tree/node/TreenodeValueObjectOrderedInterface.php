<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeValueObjectOrderedInterface
 * @template NodeValueType
 */
interface TreenodeValueObjectOrderedInterface extends TreenodeValueObjectInterface
{
    /**
     * getIndex
     * @return int
     */
    public function getIndex(): int;
}