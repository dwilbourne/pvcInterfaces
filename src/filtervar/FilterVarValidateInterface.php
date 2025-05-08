<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\filtervar;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class FilterVarValidateInterface
 * @extends ValTesterInterface<string>
 */
interface FilterVarValidateInterface extends FilterVarInterface, ValTesterInterface
{
    /**
     * validate
     * @param mixed $value
     * @return bool
     */
    public function validate(mixed $value): bool;

    /**
     * @param  mixed  $value
     * @return bool
     * this is an alias of the validate method.  This method implements ValTesterInterface
     */
    public function testValue(mixed $value): bool;
}
