<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class HasPayloadInterface
 *
 * All data structures in this namespace implement HasPayloadInterface so that the methods for accessing the data
 * within the structures remain consistent across all types.
 *
 * The data typing in the interface is set up so that payloads can be null in implementation if you want them to be
 * nullable.  Of course, you can prevent them from being nullable as well by setting up the payloadtester accordingly.
 *
 * @template PayloadType
 */
interface HasPayloadInterface
{
    /**
     * setValue
     * @param PayloadType $value
     */
    public function setPayload($value): void;

    /**
     * getValue
     * @return PayloadType
     */
    public function getPayload();

    /**
     * setPayloadTester
     * @param ValTesterInterface<PayloadType> $tester
     */
    public function setPayloadTester(ValTesterInterface $tester): void;

    /**
     * getPayloadTester
     * @return ValTesterInterface<PayloadType>|null
     */
    public function getPayloadTester(): ?ValTesterInterface;
}
