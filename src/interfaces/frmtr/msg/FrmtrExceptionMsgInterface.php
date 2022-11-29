<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr\msg;

use pvc\interfaces\err\ExceptionMsgInterface;
use pvc\interfaces\frmtr\FrmtrInterface;

interface FrmtrExceptionMsgInterface extends FrmtrInterface
{
	/**
	 * format
	 * @param ExceptionMsgInterface $msg
	 * @return string
	 */
	public function format(ExceptionMsgInterface $msg): string;
}
