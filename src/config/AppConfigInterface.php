<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\config;

/**
 * Class AppConfigInterface
 */
interface AppConfigInterface
{
    /**
     * setProjectRoot
     * @param string $dirName
     */
    public function setProjectRoot(string $dirName): void;

    /**
     * getProjectRoot
     * @return string
     */
    public function getProjectRoot(): string;
}
