<?php

namespace pvc\interfaces\html\text;

use pvc\interfaces\html\dom\DomElementInterface;
use pvc\interfaces\intl\LocaleInterface;

interface DomTextInterface extends DomElementInterface
{
    public function setLocale(LocaleInterface $locale): void;
}