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
     * @return string
     */
    public function getName(): string;

    /**
     * @param array<string|int>|string|int|bool ...$values
     * @return void
     */
    public function setValue(...$values): void;

    /**
     * getValue
     * @return array<string|int>|string|int|bool|null
     */
    public function getValue(): array|string|int|bool|null;

    /**
     * @return void
     */
    public function unsetValue(): void;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
