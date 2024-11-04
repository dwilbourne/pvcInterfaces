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
     * @param string|TagVoidInterface $element
     * @param string|null $key
     * @return TagVoidInterface
     */
    public function setChild(string|TagVoidInterface $element, string $key = null): TagVoidInterface;

    /**
     * getChild
     * @param string $key
     * @return ?TagVoidInterface
     */
    public function getChild(string $key): ?TagVoidInterface;

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
