<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * Class TranslationResourcePHPInterface
 *
 * If you want to use a php file to store translation strings, it must have this interface. File-based translation
 * string resources (whether they are done in PHP or not) must follow the convention of putting all the translation
 * strings for a particular domain and a particular language into one file.
 */
interface TranslationResourcePHPInterface
{
    /**
     * getMessage
     * returns the translation string corresponding to the messageid
     *
     * @param string $msgId
     * @return string
     */
    public function getMessage(string $msgId): string;
}
