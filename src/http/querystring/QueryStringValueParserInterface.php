<?php

namespace pvc\interfaces\http\querystring;

interface QueryStringValueParserInterface
{
    public function parse(string $value): bool;

    /**
     * getParsedValue
     * @return int|float|bool|string|array<mixed>|null
     */
    public function getParsedValue(): null|int|float|bool|string|array;
}