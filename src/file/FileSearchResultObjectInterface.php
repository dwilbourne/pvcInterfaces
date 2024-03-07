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
     * @param string|null $dirName
     *
     * resets the object so that it may be used in successive file searches.  This method is called at the beginning
     * of each file search. The $dirName argument would typically be used if you want to include the start directory
     * as part of the result set
     */
    public function initialize(string $dirName = null): void;
}
