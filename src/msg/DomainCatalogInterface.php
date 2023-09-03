<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * A DomainCatalog is a collection of messageid / message template pairs that are contextually related.
 *
 * So in this case, "domain" is intended to be something like a "knowledge domain".  You can have as many or as
 * few domains as necessary to divide up your messages into logical groups that make sense to you.  A particular
 * domain catalog is that set of messageid / message template pairs for a given locale.
 */
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
     * @return array<string|null>
     */
    public function getMessages(): array;

    /**
     * getMessage
     * @param string $messageId
     * @return string|null
     */
    public function getMessage(string $messageId): ?string;

    /**
     * @function load
     * @param string $domain
     * @param string $locale
     * @return void
     */
    public function load(string $domain, string $locale): void;

    /**
     * @function isLoaded
     * @param string $locale
     * @return bool
     */
    public function isLoaded(string $domain = '', string $locale = ''): bool;
}
