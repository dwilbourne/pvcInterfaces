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
     * addInnerHtml
     * @param TagVoidInterface|TagInterface|MsgInterface|string $innerHtml
     */
    public function addInnerHtml(TagVoidInterface|TagInterface|MsgInterface|string $innerHtml): void;


    /**
     * getInnerHtml
     * @return array<TagVoidInterface|TagInterface|MsgInterface|string>
     */
    public function getInnerHtml(): array;

    /**
     * generateClosingTag
     * @return string
     */
    public function generateClosingTag(): string;
}
