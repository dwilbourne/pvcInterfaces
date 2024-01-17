<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator;

use pvc\interfaces\msg\HasMsgInterface;
use pvc\interfaces\msg\MsgInterface;

/**
 * Class ValidatorInterface
 * @template DataType
 */
interface ValidatorInterface extends HasMsgInterface
{
    /**
     * validate
     * @param DataType $data
     * @return bool
     */
    public function validate($data): bool;

    /**
     * setTester
     * @param ValTesterInterface<DataType> $tester
     */
    public function setValTester(ValTesterInterface $tester): void;

    /**
     * getTester
     * @return ValTesterInterface<DataType>
     */
    public function getValTester(): ValTesterInterface;

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

    /**
     * setMsg
     * @param MsgInterface $msg
     */
    public function setMsg(MsgInterface $msg): void;

    /**
     * getMsg
     * @return MsgInterface
     */
    public function getMsg(): MsgInterface;
}
