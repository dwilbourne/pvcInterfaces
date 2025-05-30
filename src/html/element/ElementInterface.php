<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\msg\MsgInterface;

/**
 * Class ElementInterface
 */
interface ElementInterface extends ElementVoidInterface
{
    /**
     * setChild
     * @param class-string|ElementVoidInterface $element
     * @return ElementVoidInterface
     */
    public function setChild(string|ElementVoidInterface $element): ElementVoidInterface;

    /**
     * setInnerText
     * @param MsgInterface|string $innerText
     */
    public function setInnerText(MsgInterface|string $innerText): void;

    /**
     * @return array<ElementVoidInterface|MsgInterface|string>
     */
    public function getNodes(): array;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
