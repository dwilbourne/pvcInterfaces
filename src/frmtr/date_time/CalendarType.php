<?php

namespace pvc\interfaces\frmtr\date_time;

use IntlDateFormatter;

enum CalendarType : int
{
    case TRADITIONAL = IntlDateFormatter::TRADITIONAL;
    case GREGORIAN = IntlDateFormatter::GREGORIAN;
}