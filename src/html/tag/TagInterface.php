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
     * @param TagInterface|TagVoidInterface|MsgInterface $innerHtml
     */
    public function addInnerHtml(TagInterface|TagVoidInterface|MsgInterface $innerHtml): void;


    /**
     * getInnerHtml
     * @return array<TagInterface|TagVoidInterface|MsgInterface>
     */
    public function getInnerHtml(): array;
}
