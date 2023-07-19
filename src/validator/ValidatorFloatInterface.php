<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorFloatInterface
 */
interface ValidatorFloatInterface extends HasMsgInterface
{
    /**
     * validate
     * @param float|null $data
     * @return bool
     */
    public function validate(float $data = null): bool;
}