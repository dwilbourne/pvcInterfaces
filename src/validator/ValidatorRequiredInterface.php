<?php

/**
 * @package pvcInterfaces
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Interface ValidatorRequiredInterface
 */
interface ValidatorRequiredInterface extends HasMsgInterface
{
    /**
     * @function validate
     * @param mixed $data
     * @return bool
     */
    public function validate($data = null): bool;
}
