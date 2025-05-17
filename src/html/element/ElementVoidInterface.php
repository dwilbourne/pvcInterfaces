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
     * @return ElementVoidInterface
     */
    public function setAttribute(string $name, ...$values): ElementVoidInterface;

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
     * @return void
     */
    public function removeAttribute(string $name): void;

    /**
     * @return string
     */
    public function generateOpeningTag(): string;
}
