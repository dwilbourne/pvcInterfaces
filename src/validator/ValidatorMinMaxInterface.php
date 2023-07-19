<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorMinMaxInterface
 * @template DataType
 */
interface ValidatorMinMaxInterface extends HasMsgInterface
{
    /**
     * validate
     * @param DataType $data
     * @return bool
     */
    public function validate($data): bool;
}