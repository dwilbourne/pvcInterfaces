<?php

namespace pvc\interfaces\html\content_model;

enum ContentPermission: int
{
    case IS_PERMITTED = 1;
    case IS_NOT_PERMITTED = -1;

    case NOT_APPLICABLE = 0;
}