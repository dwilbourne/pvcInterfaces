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
     * TODO: decide whether to implement this feature
     * public function setInnerTextAllowed(bool $innerTextAllowed): void;
     */

    /**
     * innerTextAllowed
     * @return bool
     * TODO: decide whether to implement this feature
     * public function isInnerTextAllowed(): bool;
     */

    /**
     * setDefaultCSSDisplayValue
     * @param string $displayValue
     * TODO: decide whether to implement this feature
     * public function setDefaultCSSDisplayValue(string $displayValue): void;
     */

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
