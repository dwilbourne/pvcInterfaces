<?php

namespace pvc\interfaces\frmtr\date_time;

use IntlDateFormatter;

enum TimeType : int
{
    case NONE = IntlDateFormatter::NONE;
    case SHORT = IntlDateFormatter::SHORT;
    case MEDIUM = IntlDateFormatter::MEDIUM;
    case LONG = IntlDateFormatter::LONG;
    case FULL = IntlDateFormatter::FULL;
}