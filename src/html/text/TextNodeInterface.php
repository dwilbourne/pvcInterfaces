<?php

namespace pvc\interfaces\html\text;

use pvc\interfaces\html\dom\DomNodeInterface;

interface TextNodeInterface extends DomNodeInterface
{
    public function getText() : string;
}