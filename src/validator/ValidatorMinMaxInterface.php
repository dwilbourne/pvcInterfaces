<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use DateTime;

/**
 * Class ValidatorMinMaxInterface
 */
interface ValidatorMinMaxInterface
{
    /**
     * validate
     * @param int|float|DateTime $data
     * @return bool
     */
    public function validate(int|float|DateTime $data): bool;
}