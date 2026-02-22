<?php

namespace pvc\interfaces\frmtr\date_time;

use IntlDateFormatter;

enum DateType : int
{
    case NONE = IntlDateFormatter::NONE;
    case SHORT = IntlDateFormatter::SHORT;
    case MEDIUM = IntlDateFormatter::MEDIUM;
    case LONG = IntlDateFormatter::LONG;
    case FULL = IntlDateFormatter::FULL;
    case RELATIVE_SHORT = IntlDateFormatter::RELATIVE_SHORT;
    case RELATIVE_MEDIUM = IntlDateFormatter::RELATIVE_MEDIUM;
    case RELATIVE_LONG = IntlDateFormatter::RELATIVE_LONG;
    case RELATIVE_FULL = IntlDateFormatter::RELATIVE_FULL;
}