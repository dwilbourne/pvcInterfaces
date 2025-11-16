<?php

namespace pvc\interfaces\struct\types\id;

enum IdType: string
{
    case Integer = 'integer';
    case String = 'string';
}