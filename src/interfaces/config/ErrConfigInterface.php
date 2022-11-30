<?php

declare(strict_types=1);

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\config;

interface ErrConfigInterface
{
	public static function getExceptionMsgLocale(): string;
}
