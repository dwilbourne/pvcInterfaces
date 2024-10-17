<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeVoidInterface
 *
 */
interface AttributeVoidInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * render
     * @return string
     */
    public function render(): string;

    /**
     * setGloabl
     * @param bool $global
     */
    public function setGloabl(bool $global): void;

    /**
     * isGlobal
     * @return bool
     */
    public function isGlobal(): bool;
}
