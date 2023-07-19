<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorBoolInterface
 */
interface ValidatorBoolInterface extends HasMsgInterface
{
    /**
     * validate
     * @param bool|null $data
     * @return bool
     */
    public function validate(bool $data = null): bool;
}