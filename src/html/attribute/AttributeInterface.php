<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class AttributeInterface
 *
 * This interface applies to attributes but not events.
 *
 * Attributes (but not events) optionally have a ValTester object which can validate the value(s) as it/they are
 * being set.
 *
 * Because there are no methods to remove attributes or "unset them", if the value is not set then the attribute will
 * not be rendered.  Thus, you can set the value to null if you have set it and later decide you don't want the
 * attribute rendered.  In the case of void attributes (for example, 'hidden') the attribute is not rendered if the
 * value is false.
 */
interface AttributeInterface extends AttributeAbstractInterface
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
