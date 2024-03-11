<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

use pvc\interfaces\validator\ValidatorInterface;

/**
 * Class ValidatorPayloadInterface
 * @template ValueType
 * @extends ValidatorInterface<ValueType>
 */
interface ValidatorPayloadInterface extends ValidatorInterface
{
}
