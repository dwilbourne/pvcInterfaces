<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr;

/**
 * Interface FrmtrInterface
 */
interface FrmtrInterface
{
	/**
	 * setFormat
	 * @param string $format
	 * @return bool
	 */
	public function setFormat(string $format): bool;

	/**
	 * getFormat
	 * @return string
	 */
	public function getFormat(): string;

	/**
	 * setLocale
	 * @param string $locale
	 * @return bool
	 */
	public function setLocale(string $locale): bool;

	/**
	 * getLocale
	 * @return string
	 */
	public function getLocale(): string;
}
