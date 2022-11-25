<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

interface ExceptionInterface
{
	public function setMsg(ExceptionMsgInterface $msg): void;

	public function getMsg(): ExceptionMsgInterface;
}