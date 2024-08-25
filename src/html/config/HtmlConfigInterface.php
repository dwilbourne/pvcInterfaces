<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\config;

/**
 * Class HtmlConfigInterface
 */
interface HtmlConfigInterface
{
    /**
     * isValidAttributeName
     * @param string $name
     * @return bool
     */
    public function isValidAttributeName(string $name): bool;

    public function isValidTagName(string $name): bool;
}
