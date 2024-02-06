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
     * getMessages
     * returns an array of all the translation strings in the catalog for a particular language in a msgId => message
     * format
     * @return array<string, string>
     */
    public function getMessages(): array;

    /**
     * getMessage
     * returns the translation string corresponding to the messageid
     *
     * @param string $msgId
     * @return string
     */
    public function getMessage(string $msgId): string;
}
