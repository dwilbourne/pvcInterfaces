<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\filtervar;

/**
 * Class FilterVarSanitizeInterface
 */
interface FilterVarSanitizeInterface extends FilterVarValidateInterface
{
    /**
     * sanitize
     * @param string $value
     * @return mixed
     */
    public function sanitize(string $value): mixed;
}