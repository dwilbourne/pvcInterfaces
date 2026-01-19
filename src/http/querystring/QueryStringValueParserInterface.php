<?php

namespace pvc\interfaces\http\querystring;

interface QueryStringValueParserInterface
{
    public function parse(mixed $value): bool;
}