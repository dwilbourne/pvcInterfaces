<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeNotVoidInterface
 * @template ValueType
 * @extends AttributeInterface<ValueType>
 *
 */
interface AttributeNotVoidInterface extends AttributeInterface
{
    /**
     * setTester
     * @param ValTesterInterface<string> $tester
     */
    public function setTester(ValTesterInterface $tester): void;

    /**
     * getTester
     * @return ValTesterInterface<string>|null
     */
    public function getTester(): ?ValTesterInterface;
}
