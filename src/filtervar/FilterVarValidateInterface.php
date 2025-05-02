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
     * @param string $value
     * @return bool
     */
    public function validate(string $value): bool;

    /**
     * @param  mixed  $value
     * @return bool
     */
    public function testValue(mixed $value): bool;
}
