<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

/**
 * Class TagFactoryInterface
 * @template ValueType
 */
interface TagFactoryInterface
{
    /**
     * makeTag
     * @param string $tagName
     * @return TagInterface<ValueType>
     */
    public function makeTag(string $tagName): TagInterface;

    /**
     * makeTagVoid
     * @param string $tagName
     * @return TagVoidInterface<ValueType>
     */
    public function makeTagVoid(string $tagName): TagVoidInterface;
}
