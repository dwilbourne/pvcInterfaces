<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeInterface
 */
interface AttributeInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * render
     * @return string
     */
    public function render(): string;

    /**
     * setTester
     * @param ValTesterInterface<string> $tester
     */
    public function setTester(ValTesterInterface $tester): void;

    /**
     * getTester
     * @return ValTesterInterface<string>
     */
    public function getTester(): ValTesterInterface;
}
