<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorStringInterface
 */
interface ValidatorStringInterface extends HasMsgInterface
{
    /**
     * validate
     * @param string $data
     * @return bool
     */
    public function validate(string $data = ''): bool;
}