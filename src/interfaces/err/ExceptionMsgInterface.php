<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

use pvc\interfaces\msg\MsgInterface;

interface ExceptionMsgInterface extends MsgInterface
{
	public function setCode(int $code): void;

	public function getCode(): int;
}
