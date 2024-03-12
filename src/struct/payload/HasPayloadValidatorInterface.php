<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class HasPayloadValidatorInterface
 * @template ValueType of HasPayloadInterface
 */
interface HasPayloadValidatorInterface
{
    /**
     * setValueValidator
     * @param ValidatorPayloadInterface<ValueType> $validator
     */
    public function setPayloadValidator(ValidatorPayloadInterface $validator): void;

    /**
     * getValueValidator
     * @return ValidatorPayloadInterface<ValueType>|null
     */
    public function getPayloadValidator(): ?ValidatorPayloadInterface;
}
