<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorDateTimeInterface
 */
interface ValidatorDateTimeInterface extends HasMsgInterface
{
    /**
     * validate
     * @param \DateTime $data
     * @return bool
     */
    public function validate(\DateTime $data): bool;
}