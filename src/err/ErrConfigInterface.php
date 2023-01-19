<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\err;

/**
 * Interface ErrConfigInterface
 */
interface ErrConfigInterface
{
	/**
	 * getLibraryCode
	 * @param string $libraryName
	 * @return int
	 */
	public static function getLibraryCode(string $libraryName) :? int;

	/**
	 * createExceptionCode
	 * @param string $libraryName
	 * @param int $localExceptionCode
	 * @return int
	 */
	public static function createExceptionCode(string $libraryName, int $localExceptionCode) : int;
}
