<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\config;

/**
 * Interface AppConfigInterface
 */
interface AppConfigInterface
{
    /**
     * getProjectRoot
     * @return string
     */
    public static function getProjectRoot(): string;
}
