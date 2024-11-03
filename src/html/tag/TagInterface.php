<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\msg\MsgFactoryInterface;
use pvc\interfaces\msg\MsgInterface;

/**
 * Class TagInterface
 */
interface TagInterface extends TagVoidInterface
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
     * setAllowedChildElements
     * @param array<string> $elementNames
     */
    public function setAllowedChildElements(array $elementNames): void;

    /**
     * getAllowedChildElements
     * @return array<string>
     */
    public function getAllowedChildElements(): array;

    /**
     * isAllowedChildElement
     * @param string $elementName
     * @return bool
     */
    public function isAllowedChildElement(string $elementName): bool;

    /**
     * setChild
     * @param string|TagVoidInterface $element
     * @param string|null $id
     * @return TagVoidInterface
     */
    public function setChild(string|TagVoidInterface $element, string $id = null): TagVoidInterface;

    /**
     * getChild
     * @param string $id
     * @return ?TagVoidInterface
     */
    public function getChild(string $id): ?TagVoidInterface;

    /**
     * getChildChildren
     * @param callable $filter
     * @return array<TagVoidInterface>
     */
    public function getChildren(callable $filter): array;

    /**
     * setInnerText
     * @param MsgInterface|string $innerText
     */
    public function setInnerText(MsgInterface|string $innerText): void;

    /**
     * getInnerText
     * @return MsgInterface|string
     */
    public function getInnerText(): MsgInterface|string;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
