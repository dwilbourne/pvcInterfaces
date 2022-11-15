<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface DomainCatalogInterface
{
    public function getDomain(): string;

    public function getLocale(): string;

    public function getMessages(): array;

    public function getMessage(string $messageId): string;
}