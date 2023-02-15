<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface extends HasMsgInterface
{
    /**
     * @function validate
     * @param mixed $data
     * @return bool
     */
    public function validate($data): bool;
}
