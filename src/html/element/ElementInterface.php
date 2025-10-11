<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\attribute\AttributeCustomDataInterface;
use pvc\interfaces\html\attribute\AttributeInterface;
use pvc\interfaces\html\attribute\AttributeWithValueInterface;
use pvc\interfaces\msg\MsgInterface;
use pvc\interfaces\struct\collection\IndexedElementInterface;

/**
 * Class ElementInterface
 * @phpstan-import-type ValueType from AttributeWithValueInterface
 */
interface ElementInterface extends IndexedElementInterface
{
    public function getName(): string;

    /**
     * @param  string  $name
     * @param  ValueType  ...$values
     *
     * @return ElementInterface
     */
    public function setAttribute(string $name, ...$values): ElementInterface;

    public function getAttribute(string $name): ?AttributeInterface;

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

    /**
     * generateFirstVisitOutput
     * @return string|MsgInterface
     * text nodes can generate a Msg (which will need to be formatted / translated)
     */
    public function generateFirstVisitOutput(): string|MsgInterface;

    /**
     * generateLastVisitOutput
     * @return string
     */
    public function generateLastVisitOutput(): string;
}
