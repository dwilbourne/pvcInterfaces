<?php

namespace pvc\interfaces\html\attribute;

/**
 * @phpstan-import-type ValueType from AttributeInterface
 */
enum AttributePrimitiveDataType: string
{
    case String = 'string';
    case Integer = 'int';
    case Bool = 'bool';
}