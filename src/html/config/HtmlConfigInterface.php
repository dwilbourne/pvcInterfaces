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

    /**
     * isValidTagName
     * @param string $name
     * @return bool
     */
    public function isValidTagName(string $name): bool;

    /**
     * innerTextNotAllowed
     * @param string $tagName
     * @return bool
     */
    public function innerTextNotAllowed(string $tagName): bool;

    /**
     * isValidSubtag
     * @param string $name
     * @return bool
     */
    public function isValidSubTag(string $subTagName, $parentTagName): bool;

    /**
     * isInlineTag
     * @param string $name
     * @return bool
     */
    public function isInlineTag(string $name): bool;

    /**
     * isBlockTag
     * @param string $name
     * @return bool
     */
    public function isBlockTag(string $name): bool;
}