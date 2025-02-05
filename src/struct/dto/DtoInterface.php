<?php

namespace pvc\interfaces\struct\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 */
interface DtoInterface
{
    /**
     * @param string $name
     * @return mixed
     *
     * all Dtos must have a magic getter.  It should return the value of the property corresponding to the parameter
     * name.
     */
    public function __get(string $name): mixed;
}