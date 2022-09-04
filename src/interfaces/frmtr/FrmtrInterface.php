<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr;

use Locale;

interface FrmtrInterface
{
    public function setFormat(string $format) : void;

    public function getFormat() : string;

    public function setLocale(Locale $locale) : void;

    public function getLocale() : Locale;
}