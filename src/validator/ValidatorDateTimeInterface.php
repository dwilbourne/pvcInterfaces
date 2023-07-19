<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use DateTime;
use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorDateTimeInterface
 */
interface ValidatorDateTimeInterface extends HasMsgInterface
{
    /**
     * validate
     * @param DateTime|null $data
     * @return bool
     */
    public function validate(DateTime $data = null): bool;
}