<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\config;

/**
 * Interface ErrConfigInterface
 */
interface ErrConfigInterface
{
	/**
	 * createExceptionCode
	 * @param string $exceptionCatalogClassname
	 * @param int $localCatalogCode
	 * @return int
	 */
	public static function createExceptionCode(string $exceptionCatalogClassname, int $localCatalogCode) : int;
}
