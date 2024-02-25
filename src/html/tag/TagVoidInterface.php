<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

/**
 * Class TagVoidInterface
 */
interface TagVoidInterface
{
    /**
     * getTagName
     * @return string
     */
    public function getTagName(): string;

    /**
     * setAttribute
     * @param string $name
     * @param string|array<string>|bool $value
     */
    public function setAttribute(string $name, string|array|bool $value): void;

    /**
     * getAttributeValue
     * @param string $attributeName
     * @return string|array<string>|bool|null
     */
    public function getAttributeValue(string $attributeName): string|array|bool|null;

    /**
     * setAttributes
     * @param array<string, string|array<string>|bool> $attributes
     */
    public function setAttributes(array $attributes): void;

    /**
     * getAttributes
     * @return array<string, string|array<string>|bool>
     */
    public function getAttributes(): array;

    /**
     * setEvent
     * @param string $eventName
     * @param string $script
     */
    public function setEvent(string $eventName, string $script): void;

    /**
     * getEventScript
     * @param string $eventName
     * @return string|null
     */
    public function getEventScript(string $eventName): ?string;

    /**
     * getEvents
     * @return array<string, string>
     */
    public function getEvents(): array;

    /**
     * generateOpeningTag
     * @return string
     */
    public function generateOpeningTag(): string;
}
