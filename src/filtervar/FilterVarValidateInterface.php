<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\filtervar;

/**
 * Class FilterVarValidateInterface
 */
interface FilterVarValidateInterface extends FilterVarInterface
{
    /**
     * validate
     * @param string $value
     * @return bool
     */
    public function validate(string $value): bool;
}
