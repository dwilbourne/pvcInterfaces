<?php

declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\msg\HasMsgInterface;

interface ValidatorInterface extends HasMsgInterface
{
    /**
     * @function validate
     * @param mixed $data
     * @return bool
     */
    public function validate($data): bool;
}
