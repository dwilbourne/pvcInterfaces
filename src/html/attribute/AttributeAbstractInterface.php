<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeAbstractInterface
 *
 * This interface applies to attributes and events, which are really just a specialized kind of attribute
 */
interface AttributeAbstractInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * setName
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
