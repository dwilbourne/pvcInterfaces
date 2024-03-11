<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class PayloadInterface
 * All data structures should extend PayloadInterface so that the methods for accessing the data within the structure
 * remain consistent across all types of data structures
 * @template ValueType of ValidatorPayloadInterface
 */
interface PayloadInterface
{
    /**
     * setValueValidator
     * @param ValidatorPayloadInterface<ValueType> $validator
     */
    public function setValueValidator(ValidatorPayloadInterface $validator): void;

    /**
     * getValueValidator
     * @return ValidatorPayloadInterface<ValueType>|null
     */
    public function getValueValidator(): ?ValidatorPayloadInterface;

    /**
     * setValue
     * @param ValueType $value
     */
    public function setValue($value): void;

    /**
     * getValue
     * @return ValueType|null
     */
    public function getValue();
}
