<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;

/**
 * Class ElementVoidInterface
 */
interface ElementVoidInterface
{
    /**
     * @param  string  $name
     * @param  string|int|bool  ...$values
     * @return void
     */
    public function setAttribute(string $name, ...$values): void;

    /**
     * setCustomData
     * @param AttributeCustomDataInterface $attribute
     * @return ElementVoidInterface
     */
    public function setCustomData(
        AttributeCustomDataInterface $attribute
    ): ElementVoidInterface;

    /**
     * @param  string  $name
     * @param  string  $script
     *
     * @return ElementVoidInterface
     */
    public function setEvent(string $name, string $script): ElementVoidInterface;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;

    /**
     * @param  string  $eventName
     * @return void
     */
    public function removeEvent(string $eventName): void;

    /**
     * @param  string  $customAttributeName
     * @return void
     */
    public function removeCustomData(string $customAttributeName): void;
}
