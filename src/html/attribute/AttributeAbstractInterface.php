<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeAbstractInterface
 * @template ValueType
 *
 * This interface applies to attributes and events, which are really just single-valued attributes. Both attributes
 * and events have values, even void attributes where the value is either true or false.  So this interface
 * includes a setValue and getValue method.  The ValueType template allows the value type to vary:  boolean
 * for void attributes, a string for single-valued attributes and an array of strings for multivalued attributes.
 * Single-valued and multivalued attributes also have value testers to ensure that the value(s) of the attribute
 * conform to the specifications of HTML.
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
