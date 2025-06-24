<?php

namespace pvc\interfaces\html\dom;

use pvc\interfaces\struct\tree\node\TreenodeFactoryInterface;

interface DomTreenodeFactoryInterface extends TreenodeFactoryInterface
{
    public function makeTreenode() : DomTreenodeInterface;
}