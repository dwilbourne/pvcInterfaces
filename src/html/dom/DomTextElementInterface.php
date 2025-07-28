<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\intl\LocaleInterface;

interface DomTextElementInterface extends DomElementInterface
{
    public function setLocale(LocaleInterface $locale): void;
}