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
     * canAddElement
     * @param string $elementName
     * @return bool
     */
    public function canAddElement(string $elementName): bool;

    /**
     * addChildElement
     * @param string|TagVoidInterface $element
     * @return TagVoidInterface
     */
    public function addChildElement(string|TagVoidInterface $element): TagVoidInterface;

    /**
     * getChildElementById
     * @param string $id
     * @return TagVoidInterface|null
     */
    public function getChildElementById(string $id): ?TagVoidInterface;

    /**
     * getChildElementByName
     * @param string $name
     * @return array<TagVoidInterface>|TagVoidInterface|null
     */
    public function getChildElementByName(string $name): array|TagVoidInterface|null;

    /**
     * addMsg
     * @param MsgInterface $msg
     */
    public function addMsg(MsgInterface $msg): void;

    /**
     * addText
     * @param string $text
     */
    public function addText(string $text): void;

    /**
     * getInnerHtml
     * @return array<TagVoidInterface|MsgInterface|string>
     */
    public function getInnerHtml(): array;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
