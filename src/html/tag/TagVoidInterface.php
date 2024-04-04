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
     * @param mixed $value
     * @param ValTesterInterface<string>|null $tester
     * @return mixed
     */
    public function setCustomDataAttribute(string $name, mixed $value, ValTesterInterface $tester = null);

    /**
     * setEvent
     * @param EventInterface $event;
     */
    public function setEvent(EventInterface $event): void;

    /**
     * getAttributes
     * @return array<AttributeInterface>
     */
    public function getAttributes(): array;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
