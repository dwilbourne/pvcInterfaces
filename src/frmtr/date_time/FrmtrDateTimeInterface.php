<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\date_time;

use DateTime;
use DateTimeZone;
use pvc\interfaces\frmtr\FrmtrGenericInterface;

/**
 * Interface FrmtrDateTimeInterface
 *
 * @extends FrmtrGenericInterface<DateTime>
 */
interface FrmtrDateTimeInterface extends FrmtrGenericInterface
{
    public function setCalendarType(CalendarType $calendarType): void;

    public function setTimezone(DateTimeZone $timezone): void;

    public function setDateType(DateType $dateType): void;

    public function setTimeType(TimeType $timeType): void;

    /**
     * format
     * @param DateTime $value
     * @return string
     */
    public function format($value): string;
}
