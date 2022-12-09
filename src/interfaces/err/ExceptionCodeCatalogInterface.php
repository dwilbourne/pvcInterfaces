<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\err;

/**
 * Interface ExceptionCodeCatalogInterface
 */
interface ExceptionCodeCatalogInterface
{
	/**
	 * getCode
	 * @param string $msgId
	 * @return int
	 */
	public function getCode(string $msgId): int;
}
