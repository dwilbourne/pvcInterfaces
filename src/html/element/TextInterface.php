<?php

namespace pvc\interfaces\html\element;

use pvc\interfaces\intl\LocaleInterface;

interface TextInterface
{
    public function setLocale(LocaleInterface $locale): void;
}