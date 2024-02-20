<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

/**
 * Class TagInterface
 */
interface TagInterface extends TagVoidInterface
{
    /**
     * addInnerHtml
     * @param string|TagVoidInterface $innerHtml
     */
    public function addInnerHtml(string|TagVoidInterface $innerHtml): void;
}
