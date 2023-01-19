<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\numeric;

use pvc\interfaces\frmtr\FrmtrInterface;

/**
 * Interface FrmtrFloatInterface
 */
interface FrmtrFloatInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param float $value
	 * @return string
	 */
	public function format(float $value): string;
}
