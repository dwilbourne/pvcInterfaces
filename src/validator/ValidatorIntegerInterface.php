<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorIntegerInterface
 */
interface ValidatorIntegerInterface extends HasMsgInterface
{
    /**
     * validate
     * @param int $data
     * @return bool
     */
    public function validate(int $data): bool;
}