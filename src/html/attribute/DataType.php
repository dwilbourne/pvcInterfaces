<?php

namespace pvc\interfaces\html\attribute;

enum DataType: string
{
    case String = 'string';
    case Integer = 'int';
    case Boolean = 'bool';
}