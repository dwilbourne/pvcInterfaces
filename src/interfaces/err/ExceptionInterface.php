<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

/**
 * Interface ExceptionInterface
 * @package pvc\interfaces\err
 */
interface ExceptionInterface
{
	/**
	 * setMsg
	 * @param ExceptionMsgInterface $msg
	 */
	public function setMsg(ExceptionMsgInterface $msg): void;

	/**
	 * getMsg
	 * @return ExceptionMsgInterface
	 */
	public function getMsg(): ExceptionMsgInterface;
}