<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeCustomDataInterface
 *
 * custom attributes are essentially single valued attributes, but we need methods to allow the programmer to set
 * the name / id and the value tester manually as opposed to through the DI container.
 */
interface AttributeCustomDataInterface extends AttributeSingleValueInterface
{
    /**
     * setName
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * setTester
     * @param ValTesterInterface<string> $valTester
     */
    public function setTester(ValTesterInterface $valTester): void;
}
