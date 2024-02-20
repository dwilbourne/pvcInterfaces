<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\displayable\DisplayableInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;

/**
 * Class TagVoidInterface
 */
interface TagVoidInterface extends DisplayableInterface
{
    /**
     * getTagName
     * @return string
     */
    public function getTagName(): string;

    /**
     * setAttribute
     * @param AttributeInterface $attribute
     */
    public function setAttribute(AttributeInterface $attribute): void;

    /**
     * getAttribute
     * @param string $attributeName
     * @return AttributeInterface|null
     */
    public function getAttribute(string $attributeName): ?AttributeInterface;

    /**
     * setAttributes
     * @param array<AttributeInterface> $attributes
     */
    public function setAttributes(array $attributes): void;

    /**
     * getAttributes
     * @return array<AttributeInterface>
     */
    public function getAttributes(): array;

    /**
     * setEvent
     * @param EventInterface $event
     */
    public function setEvent(EventInterface $event): void;

    /**
     * getEvent
     * @param string $eventName
     * @return EventInterface|null
     */
    public function getEvent(string $eventName): ?EventInterface;

    /**
     * getEvents
     * @return array<EventInterface>
     */
    public function getEvents(): array;
}
