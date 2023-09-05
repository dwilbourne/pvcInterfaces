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
     * @param DataType $data
     * @return bool
     */
    public function validate($data): bool;

    /**
     * setTester
     * @param ValTesterInterface<DataType> $tester
     */
    public function setTester(ValTesterInterface $tester): void;

    /**
     * getTester
     * @return ValTesterInterface<DataType>
     */
    public function getTester(): ValTesterInterface;

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