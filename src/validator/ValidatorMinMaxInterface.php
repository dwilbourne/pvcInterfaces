<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use DateTime;
use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorMinMaxInterface
 */
interface ValidatorMinMaxInterface extends HasMsgInterface
{
    /**
     * validate
     * @param int|float|DateTime $min
     * @param int|float|DateTime $max
     * @return bool
     */
    public function validate(int|float|DateTime $min, int|float|DateTime $max): bool;
}