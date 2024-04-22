<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\EventInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class TagVoidInterface
 */
interface TagVoidInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * setName
     * @param string $name
     * @return mixed
     */
    public function setName(string $name);

    /**
     * setAttribute
     * @param string $name
     * @param string|array<string> $value
     */
    public function setAttribute(string $name, string|array $value): void;

    /**
     * setCustomDataAttribute
     * @param string $name
     * @param string $value
     * @param ValTesterInterface<string> $tester
     * @return mixed
     */
    public function setCustomDataAttribute(string $name, string $value, ValTesterInterface $tester);

    /**
     * setEvent
     * @param string $eventName
     * @param string $script
     */
    public function setEvent(string $eventName, string $script): void;

    /**
     * getAttribute
     * @param string $name
     * @return AttributeInterface|null
     */
    public function getAttribute(string $name): ?AttributeInterface;

    /**
     * getAttributes
     * @return array<AttributeInterface>
     */
    public function getAttributes(): array;

    /**
     * getEvents
     * @return array<EventInterface>
     */
    public function getEvents(): array;

    /**
     * generateOpeningTag
     * @return string
     */
    public function generateOpeningTag(): string;
}
