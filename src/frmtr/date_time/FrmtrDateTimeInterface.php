<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\frmtr\date_time;

use DateTime;
use pvc\frmtr\FrmtrInterface;

/**
 * Interface FrmtrDateTimeInterface
 */
interface FrmtrDateTimeInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param DateTime $value
	 * @return string
	 */
	public function format(DateTime $value): string;
}
