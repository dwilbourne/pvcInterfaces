<?php

namespace pvc\interfaces\http\querystring;

interface QueryStringValueFrmtrInterface
{
    public function format(mixed $value): string;
}