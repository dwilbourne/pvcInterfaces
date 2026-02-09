<?php

namespace pvc\interfaces\frmtr;

use pvc\interfaces\intl\LocaleInterface;

/**
 * interface common to all formatters: a formatter turns something into a string.
 * This parent interface is not generic and implementing this interface means
 * the code must be prepared to handle formatting a value of an arbitrary type.
 * But FrmtrGenericInterface inherits this interface and is generic, so that
 * formatters designed to handle individual data types can rely on the generic
 * to guarantee the data type of the value being formatted.
 */
interface FrmtrInterface
{
    /**
     * setLocale
     * @param LocaleInterface $locale
     */
    public function setLocale(LocaleInterface $locale): void;

    /**
     * getLocale
     * @return LocaleInterface
     */
    public function getLocale(): LocaleInterface;

    /**
     * format
     * @param mixed $value
     * @return string
     */
    public function format($value): string;

}