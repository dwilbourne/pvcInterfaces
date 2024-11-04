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
     * setDefId
     * @param string $defId
     *
     * sets the definition id from which the attribute is constructed.  Definition ids are unique, which is not
     * quite true for attribute names.  The type attribute can be used inside button elements and input elements, and
     * the creation of the type attribute is different between the two.  So we cannot use the attribute name as a
     * unique identifier.
     */
    public function setDefId(string $defId): void;

    /**
     * getdefId
     * @return string
     */
    public function getDefId(): string;

    public function setName(string $name): void;
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
