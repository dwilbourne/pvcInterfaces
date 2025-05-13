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
     * @param string|ElementVoidInterface $element
     * @param string|null $key
     * @return ElementVoidInterface
     */
    public function setChild(string|ElementVoidInterface $element, ?string $key = null): ElementVoidInterface;

    /**
     * setInnerText
     * @param MsgInterface|string $innerText
     */
    public function setInnerText(MsgInterface|string $innerText): void;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
