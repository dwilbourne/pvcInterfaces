<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\frmtr;

interface FrmtrInterface
{
    public function setFormat(string $format) : bool;

    public function getFormat() : string;

    public function setLocale(string $locale) : bool;

    public function getLocale() : string;
}