<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr;

use pvc\interfaces\intl\LocaleInterface;

/**
 * Interface FrmtrInterface
 * @template DataType
 */
interface FrmtrInterface
{
    /**
     * setFormat
     * @param string $format
     * @return bool
     */
    public function setFormat(string $format): bool;

    /**
     * getFormat
     * @return string
     */
    public function getFormat(): string;

    /**
     * setLocale
     * @param LocaleInterface $locale
     * @return bool
     */
    public function setLocale(LocaleInterface $locale): bool;

    /**
     * getLocale
     * @return LocaleInterface
     */
    public function getLocale(): LocaleInterface;

    /**
     * format
     * @param DataType $value
     * @return string
     */
    public function format($value): string;
}
