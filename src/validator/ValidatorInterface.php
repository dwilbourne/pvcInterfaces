<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorInterface
 */
interface ValidatorInterface extends HasMsgInterface
{
    /**
     * validate
     * @param mixed $data
     * @return bool
     */
    public function validate($data): bool;
}