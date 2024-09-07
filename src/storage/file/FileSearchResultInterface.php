<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\storage\file;

/**
 * Class FileSearchResultInterface
 */
interface FileSearchResultInterface
{
    /**
     * initialize
     * this method is called at the beginning of every search and should restore this object to its initial state so
     * that it can be used in successive searches
     */
    public function initialize(): void;

    /**
     * behaviorBeforeRecurse
     * @param string $filePath
     */
    public function behaviorBeforeRecurse(string $filePath): void;

    /**
     * behaviorAfterRecurse
     * @param string $filePath
     */
    public function behaviorAfterRecurse(string $filePath): void;
}
