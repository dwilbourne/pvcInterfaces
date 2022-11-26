<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

use pvc\interfaces\msg\MsgInterface;

/**
 * Interface ExceptionMsgInterface
 * @package pvc\interfaces\err
 */
interface ExceptionMsgInterface extends MsgInterface
{
	/**
	 * setCode
	 * @param int $code
	 */
	public function setCode(int $code): void;

	/**
	 * getCode
	 * @return int
	 */
	public function getCode(): int;
}
