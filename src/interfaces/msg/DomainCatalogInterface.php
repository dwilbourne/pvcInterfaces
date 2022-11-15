<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogInterface
{
    public function setDomain(string $domain) : void;
    public function getDomain(): string;

    public function setLocale(string $locale) : void;
    public function getLocale(): string;

    public function setMessages(array $messages) : void;
    public function getMessages(): array;

    public function getMessage(string $messageId): string;
}