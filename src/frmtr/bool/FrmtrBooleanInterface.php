<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\frmtr\bool;

use pvc\frmtr\FrmtrInterface;

/**
 * Interface FrmtrBooleanInterface
 */
interface FrmtrBooleanInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param bool $value
	 * @return string
	 */
	public function format(bool $value): string;
}
