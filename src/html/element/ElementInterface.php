<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeWithValueInterface;
use pvc\interfaces\html\dom\DomElementInterface;

/**
 * Class ElementInterface
 * @phpstan-import-type ValueType from AttributeWithValueInterface
 */
interface ElementInterface extends DomElementInterface
{
    /**
     * @param  string  $name
     * @param  ValueType  ...$values
     *
     * @return ElementInterface
     */
    public function setAttribute(string $name, ...$values): ElementInterface;

    /**
     * @param  AttributeCustomDataInterface  $customData
     * @param ValueType ...$values
     * @return void
     */
    public function setCustomData(AttributeCustomDataInterface $customData, ...$values): void;

    /**
     * @param  string  $name
     * @return void
     */
    public function removeAttribute(string $name): void;
}
