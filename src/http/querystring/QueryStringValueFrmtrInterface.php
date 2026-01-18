<?php

namespace pvc\interfaces\http\querystring;

interface QueryStringValueFrmtrInterface
{
    /**
     * format
     * @param $value
     *
     * @return string
     * leave the value untyped, not mixed
     */
    public function format($value): string;
}