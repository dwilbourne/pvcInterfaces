<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

/**
 * Class TagFactoryInterface
 * @template ValueType
 * @template ValTesterType
 */
interface TagFactoryInterface
{
    /**
     * makeTag
     * @param string $tagName
     * @return TagInterface<ValueType, ValTesterType>
     */
    public function makeTag(string $tagName): TagInterface;
}
