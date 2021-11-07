<?php declare(strict_types = 1);

namespace pvc\validator;

use pvc\msg\MsgInterface;

interface ValidatorInterface
{
    /**
     * @function validate
     * @param mixed $data
     * @return bool
     */
    public function validate($data): bool;

    /**
     * @function getErrMsg
     * @return MsgInterface|null
     */
    public function getErrMsg(): ?MsgInterface;
}
