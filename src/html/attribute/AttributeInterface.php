<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 *
 */
interface AttributeInterface
{
    /**
     * getId
     * @return string
     */
    public function getId(): string;

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
    public function setGlobal(bool $global): void;

    /**
     * isGlobal
     * @return bool
     */
    public function isGlobal(): bool;

    /**
     * setValue
     * @param string ...$values
     */
    public function setValue(...$values): void;

    /**
     * getValue
     * @return array<string>|string|null
     */
    public function getValue(): array|string|null;
}
