<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\EventInterface;

/**
 * Class ElementVoidInterface
 */
interface ElementVoidInterface
{
    /**
     * @param  string  $name
     * @param  array<string|int>|string|int|bool  $value
     * @return void
     */
    public function setAttribute(string $name, mixed $value): void;

    /**
     * setCustomData
     * @param AttributeCustomDataInterface $attribute
     * @return ElementVoidInterface
     */
    public function setCustomData(
        AttributeCustomDataInterface $attribute
    ): ElementVoidInterface;

    /**
     * setEvent
     * @param EventInterface $event
     * @return ElementVoidInterface
     */
    public function setEvent(EventInterface $event): ElementVoidInterface;

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
