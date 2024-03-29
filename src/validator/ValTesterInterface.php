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
     * @param DataType|null $value
     * @return bool
     */
    public function testValue(mixed $value): bool;
}
