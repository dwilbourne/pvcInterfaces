<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class PayloadValidatorInterface
 * @template ValueType of ValidatorPayloadInterface
 */
interface PayloadValidatorInterface
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
}
