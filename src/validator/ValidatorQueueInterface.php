<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorQueueInterface
 */
interface ValidatorQueueInterface extends HasMsgInterface
{
    public function validate($data): bool;
}