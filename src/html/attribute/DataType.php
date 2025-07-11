<?php

namespace pvc\interfaces\html\attribute;

enum DataType: string
{
    case String = 'string';
    case Integer = 'int';

    /**
     * for void attributes.
     */
    case True = 'true';
}