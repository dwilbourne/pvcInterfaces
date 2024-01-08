<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\intl;

/**
 * Class LanguageCodesInterface
 */
interface LanguageCodesInterface
{
    /**
     * @function getLanguageCodes
     * @return array<int, string>
     */
    public static function getLanguageCodes(): array;

    /**
     * validate
     * @param string $code
     * @return bool
     */
    public static function validate(string $code): bool;

}
