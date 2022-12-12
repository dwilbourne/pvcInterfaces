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
	 * getLibraryCode
	 * @param string $libraryName
	 * @return int
	 */
	public function getLibraryCode(string $libraryName) : int;

	/**
	 * createExceptionCode
	 * @param string $libraryName
	 * @param int $localExceptionCode
	 * @return int
	 */
	public function createExceptionCode(string $libraryName, int $localExceptionCode) : int;
}
