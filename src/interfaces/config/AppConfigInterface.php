<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\config;

interface AppConfigInterface
{
	public static function getProjectRoot(): string;
}