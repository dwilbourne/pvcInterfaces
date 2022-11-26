<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

interface ExceptionConstantsInterface
{
	public function getMsgCode(string $msgId): ?int;
}