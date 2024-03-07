<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\file;

/**
 * Class FileSearchResultObjectInterface
 */
interface FileSearchResultObjectInterface
{
    /**
     * initialize
     * resets the object so that it may be used in successive file searches.  This method is called at the beginning
     * of each file search.
     */
    public function initialize(): void;
}
