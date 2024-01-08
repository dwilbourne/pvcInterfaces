<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\intl;

/**
 * Class CountryCodesInterface
 */
interface CountryCodesInterface
{
    /**
     * getCountryCodesNames
     * @return array<string, string>
     */
    public static function getCountryCodesNames(): array;

    /**
     * countryCodeIsValid
     * @param string $code
     * @return bool
     */
    public static function countryCodeIsValid(string $code): bool;

}
