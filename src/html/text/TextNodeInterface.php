<?php

namespace pvc\interfaces\html\text;

use pvc\interfaces\html\dom\DomNodeInterface;
use pvc\interfaces\intl\LocaleInterface;

interface TextNodeInterface extends DomNodeInterface
{
    /**
     * @param  LocaleInterface  $locale
     *
     * @return void
     */
    public function setLocale(LocaleInterface $locale): void;
}