<?php

namespace pvc\interfaces\frmtr\array;

use pvc\interfaces\frmtr\date_time\DateType;

/**
 * Interface ArrayFlattenerInterface
 * @template DataType
 */
interface ArrayFlattenerInterface
{
    /**
     * @param  array<DateType>  $array
     * @return string
     */
    public function flatten(array $array): string;
}