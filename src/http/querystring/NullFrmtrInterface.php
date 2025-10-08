<?php

namespace pvc\interfaces\http\querystring;

interface NullFrmtrInterface
{
    /**
     * format
     * @param  array<mixed>  $array
     *
     * @return array<mixed>
     * returns an array where null array values have been formatted or removed
     */
    public function format(array $array): array;

}