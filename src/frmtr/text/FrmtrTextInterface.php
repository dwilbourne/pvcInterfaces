<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\frmtr\text;

use pvc\frmtr\FrmtrInterface;

/**
 * Interface FrmtrTextInterface
 */
interface FrmtrTextInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param string $x
	 * @return string
	 */
	public function format(string $x): string;
}
