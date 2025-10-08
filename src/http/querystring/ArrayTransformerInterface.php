<?php

namespace pvc\interfaces\http\querystring;

interface ArrayTransformerInterface
{
    /**
     * format
     * @param  array<mixed>  $array
     * @return array<mixed>
     * returns an array where either indices or values have been transformed
     * in some way but the structure of the array remains the same
     */
    public function transform(array $array): array;

}