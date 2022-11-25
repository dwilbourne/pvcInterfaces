<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

use pvc\interfaces\msg\MsgInterface;

interface ExceptionInterface
{
	public function setMsg(MsgInterface $msg): void;

	public function getMsg(): ?MsgInterface;
}