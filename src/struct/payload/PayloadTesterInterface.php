<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\payload;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class PayloadTesterInterface
 * @template PayloadType of HasPayloadInterface
 * @extends ValTesterInterface<PayloadType>
 */
interface PayloadTesterInterface extends ValTesterInterface
{
}
