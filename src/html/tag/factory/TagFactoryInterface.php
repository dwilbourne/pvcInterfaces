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
     * @return TagInterface
     */
    public function makeTag(string $tagName): TagInterface;

    /**
     * makeTagVoid
     * @param string $tagName
     * @return TagVoidInterface
     */
    public function makeTagVoid(string $tagName): TagVoidInterface;
}
