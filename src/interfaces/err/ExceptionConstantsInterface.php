<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

/**
 * Interface ExceptionConstantsInterface
 * @package pvc\interfaces\err
 */
interface ExceptionConstantsInterface
{
	/**
	 * getMsgCode
	 * @param string $msgId
	 * @return int|null
	 */
	public function getMsgCode(string $msgId): ?int;

	public function getMsgId(int $code): ?string;
}