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
	 * createGlobalExceptionCode
	 * @param string $exceptionCatalogClassname
	 * @param int $localCatalogCode
	 * @return int
	 */
	public static function createGlobalExceptionCode(string $exceptionCatalogClassname, int $localCatalogCode) : int;
}
