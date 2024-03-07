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
