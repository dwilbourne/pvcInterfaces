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
     * getAttributeDefId
     * @return string
     * returns the definition id from which the attribute was constructed
     */
    public function getAttributeDefId(): string;

    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * setGlobal
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

    /**
     * render
     * @return string
     */
    public function render(): string;
}
