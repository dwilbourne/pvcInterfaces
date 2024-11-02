<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator\valtesters;

use pvc\interfaces\regex\RegexInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterRegexInterface
 * @template DataType
 * @extends ValTesterInterface<DataType> RegexInterface
 */
interface ValTesterRegexInterface extends ValTesterInterface, RegexInterface
{
    /**
     * setRegex
     * @param RegexInterface $regex
     */
    public function setRegex(RegexInterface $regex): void;

    /**
     * getRegex
     * @return RegexInterface
     */
    public function getRegex(): RegexInterface;
}
