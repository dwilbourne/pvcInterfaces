<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag\factory;

use pvc\interfaces\html\tag\TagInterface;
use pvc\interfaces\html\tag\TagVoidInterface;

/**
 * Class TagFactoryInterface
 */
interface TagFactoryInterface
{
    /**
     * makeTag
     * @param string $tagName
     * @return TagInterface|TagVoidInterface
     */
    public function makeTag(string $tagName): TagInterface|TagVoidInterface;
}
