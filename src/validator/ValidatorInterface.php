<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;

/**
 * Class ValidatorInterface
 * @template DataType
 */
interface ValidatorInterface extends HasMsgInterface
{
    /**
     * validate
     * @param DataType|null $data
     * @return bool
     */
    public function validate($data): bool;

    /**
     * setRequired
     * @param bool $required
     */
    public function setRequired(bool $required): void;

    /**
     * isRequired
     * @return bool
     */
    public function isRequired(): bool;
}
