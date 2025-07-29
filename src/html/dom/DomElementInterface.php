<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\html\element\ElementInterface;

interface DomElementInterface extends ElementInterface
{
    public function render(): string;
}