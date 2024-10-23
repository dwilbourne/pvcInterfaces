<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\msg\MsgInterface;

/**
 * Class TagInterface
 */
interface TagInterface extends TagVoidInterface
{
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
     * addSubTagObject
     * @param TagVoidInterface $tag
     */
    public function addSubTagObject(TagVoidInterface $tag): TagInterface;

    /**
     * addSubTag
     * @param string $tagName
     * @return TagVoidInterface
     */
    public function addSubTag(string $tagName): TagVoidInterface;

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
}
