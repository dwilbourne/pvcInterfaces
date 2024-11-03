<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\msg\MsgFactoryInterface;

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
     * setChildElement
     * @param string|TagVoidInterface $element
     * @param string|null $id
     * @return TagVoidInterface
     */
    public function setChildElement(string|TagVoidInterface $element, string $id = null): TagVoidInterface;

    /**
     * getChildElement
     * @param string $id
     * @return TagVoidInterface
     */
    public function getChildElement(string $id): TagVoidInterface;

    /**
     * getChildElements
     * @param callable $filter
     * @return array<TagVoidInterface>
     */
    public function getChildElements(callable $filter): array;

    /**
     * setMsg
     * @param string $domain
     * @param string $msgId
     * @param array $parameters
     */
    public function setMsg(string $domain, string $msgId, array $parameters): void;

    /**
     * setText
     * @param string $text
     */
    public function setText(string $text): void;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
