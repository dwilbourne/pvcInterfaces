<?php

namespace pvc\interfaces\html\content_model;

enum ContentPermission: int
{
    case GRANTED = 1;
    case DENIED = -1;

    case NOT_APPLICABLE = 0;
}