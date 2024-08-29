<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\msg\MsgInterface;

/**
 * Class TagInterface
 * @template ValueType
 * @template ValTesterType
 * @extends TagVoidInterface<ValueType, ValTesterType>
 */
interface TagInterface extends TagVoidInterface
{
    /**
     * addInnerHtml
     * @param TagVoidInterface<ValueType, ValTesterType>|MsgInterface|string $innerHtml
     */
    public function addInnerHtml(TagVoidInterface|TagInterface|MsgInterface|string $innerHtml): void;

    /**
     * setAllowedSubtags
     * @param array<string> $subTagNames
     */
    public function setAllowedSubtags(array $subTagNames): void;

    /**
     * getAllowedSubTags
     * @return array<string>
     */
    public function getAllowedSubTags(): array;

    /**
     * setInnerTextAllowed
     * @param bool $innerTextAllowed
     */
    public function setInnerTextAllowed(bool $innerTextAllowed): void;

    /**
     * innerTextAllowed
     * @return bool
     */
    public function isInnerTextAllowed(): bool;

    /**
     * setIsInlineElement
     * @param bool $isInlineElement
     * @return mixed
     */
    public function setIsInlineElement(bool $isInlineElement);
    /**
     * isInlineElement
     * @return bool
     */
    public function isInlineElement(): bool;

    /**
     * isBlockElement
     * @return bool
     */
    public function isBlockElement(): bool;

    /**
     * getInnerHtml
     * @return array<TagVoidInterface<ValueType, ValTesterType>|MsgInterface|string>
     */
    public function getInnerHtml(): array;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
