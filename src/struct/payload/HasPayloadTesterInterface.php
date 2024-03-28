<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

/**
 * Class HasPayloadTesterInterface
 * @template PayloadType of HasPayloadInterface
 */
interface HasPayloadTesterInterface
{
    /**
     * setValueValidator
     * @param PayloadTesterInterface<PayloadType> $tester
     */
    public function setPayloadTester(PayloadTesterInterface $tester): void;

    /**
     * getValueValidator
     * @return PayloadTesterInterface<PayloadType>|null
     */
    public function getPayloadTester(): ?PayloadTesterInterface;
}
