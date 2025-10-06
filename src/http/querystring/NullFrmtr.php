<?php

namespace pvc\interfaces\http\querystring;

enum NullFrmtr
{
    case ShowNothing;
    case ShowParamNameOnly;
    case ShowParamNameAndString;
}