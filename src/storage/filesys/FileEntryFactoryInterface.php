<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\storage\filesys;

/**
 * Class FileEntryFactoryInterface
 */
interface FileEntryFactoryInterface
{
    /**
     * makeFileEntry
     * @return FileEntryInterface
     */
    public function makeFileEntry(): FileEntryInterface;
}