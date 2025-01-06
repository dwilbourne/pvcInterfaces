<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\element;

use pvc\interfaces\html\factory\definitions\DefinitionFactoryInterface;
use pvc\interfaces\msg\MsgFactoryInterface;
use pvc\interfaces\msg\MsgInterface;

/**
 * Class ElementInterface
 * @template VendorSpecificDefinition of DefinitionFactoryInterface
 * @extends ElementVoidInterface<VendorSpecificDefinition>
 */
interface ElementInterface extends ElementVoidInterface
{
    /**
     * setMsgFactory
     * @param MsgFactoryInterface $msgFactory
     */
    public function setMsgFactory(MsgFactoryInterface $msgFactory): void;

    /**
     * getMsgFactory
     * @return MsgFactoryInterface
     */
    public function getMsgFactory(): MsgFactoryInterface;

    /**
     * setAllowedChildDefIds
     * @param array<string> $defIds
     */
    public function setAllowedChildDefIds(array $defIds): void;

    /**
     * getAllowedChildDefIds
     * @return array<string>
     */
    public function getAllowedChildDefIds(): array;

    /**
     * isAllowedChildDefId
     * @param string $defId
     * @return bool
     */
    public function isAllowedChildDefId(string $defId): bool;

    /**
     * setChild
     * @param string|ElementVoidInterface<VendorSpecificDefinition> $element
     * @param string|null $key
     * @return ElementVoidInterface<VendorSpecificDefinition>
     */
    public function setChild(string|ElementVoidInterface $element, string $key = null): ElementVoidInterface;

    /**
     * getChild
     * @param string $key
     * @return ElementVoidInterface<VendorSpecificDefinition>|MsgInterface|string|null
     * the innerText is kept in the child array, so the return type must include MsgInterface and string
     */
    public function getChild(string $key): ElementVoidInterface|MsgInterface|string|null;

    /**
     * getChildren
     * @param callable $filter
     * @return array<ElementVoidInterface<VendorSpecificDefinition>|MsgInterface|string>
     */
    public function getChildren(callable $filter = null): array;

    /**
     * setInnerText
     * @param MsgInterface|string $innerText
     */
    public function setInnerText(MsgInterface|string $innerText): void;

    /**
     * getInnerText
     * @return MsgInterface|string|null
     */
    public function getInnerText(): MsgInterface|string|null;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
