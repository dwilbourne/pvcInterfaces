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
	 * getExceptionMsgLocale
	 * @return string
	 */
	public static function getExceptionMsgLocale(): string;
}
