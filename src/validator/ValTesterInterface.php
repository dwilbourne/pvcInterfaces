<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator;

/**
 * Class ValTesterInterface
 * @template DataType
 */
interface ValTesterInterface
{
    /**
     * testValue
     * @param DataType $value
     * @return bool|null
     */
    public function testValue(mixed $value): ?bool;

    /**
     * getMsgId
     * @return string
     */
    public function getMsgId(): string;

    /**
     * getMsgParameters
     * @return array<mixed>
     */
    public function getMsgParameters(): array;
}
