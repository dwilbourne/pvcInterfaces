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
 * @noinspection PhpCSValidationInspection
 */
interface ElementVoidInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

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
