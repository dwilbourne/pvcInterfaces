<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogInterface
{
    /**
     * getDomain
     * @return string
     */
    public function getDomain(): string;

    /**
     * getLocale
     * @return string
     */
    public function getLocale(): string;

    /**
     * getMessages
     * @return array<MsgInterface>
     */
    public function getMessages(): array;

    /**
     * getMessage
     * @param string $messageId
     * @return string|null
     */
    public function getMessage(string $messageId):? string;
}