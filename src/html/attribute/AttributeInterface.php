<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeInterface
 */
interface AttributeInterface
{
    /**
     * getdefId
     * @return string
     */
    public function getDefId(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string ...$values
     * @return void
     */
    public function setValue(...$values): void;
    /**
     * getValue
     * @return array<string>|string|bool|null
     */
    public function getValue(): array|string|bool|null;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
