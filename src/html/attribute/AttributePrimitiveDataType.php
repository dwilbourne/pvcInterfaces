<?php

namespace pvc\interfaces\html\attribute;

enum AttributePrimitiveDataType: string
{
    case String = 'string';
    case Integer = 'int';
    case Bool = 'bool';
}