<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\err;

/**
 * Interface ExceptionCodeCatalogInterface
 * @package pvc\interfaces\err
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
