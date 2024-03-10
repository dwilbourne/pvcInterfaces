<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

use pvc\interfaces\validator\ValidatorInterface;

/**
 * Class PayloadInterface
 * All data structures should extend PayloadInterface so that the methods for accessing the data within the structure
 * remain consistent across all types of data structures
 * @template ValueType
 */
interface PayloadInterface
{
    /**
     * setValueValidator
     * @param ValidatorInterface<ValueType> $validator
     */
    public function setValueValidator(ValidatorInterface $validator): void;

    /**
     * getValueValidator
     * @return ValidatorInterface<ValueType>|null
     */
    public function getValueValidator(): ?ValidatorInterface;

    /**
     * setValue
     * @param ValueType $value
     */
    public function setValue(mixed $value): void;

    /**
     * getValue
     * @return ValueType|null
     */
    public function getValue();
}
