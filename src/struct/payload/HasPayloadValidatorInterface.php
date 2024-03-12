<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class HasPayloadValidatorInterface
 * @template PayloadType of HasPayloadInterface
 */
interface HasPayloadValidatorInterface
{
    /**
     * setValueValidator
     * @param ValidatorPayloadInterface<PayloadType> $validator
     */
    public function setPayloadValidator(ValidatorPayloadInterface $validator): void;

    /**
     * getValueValidator
     * @return ValidatorPayloadInterface<PayloadType>|null
     */
    public function getPayloadValidator(): ?ValidatorPayloadInterface;
}
