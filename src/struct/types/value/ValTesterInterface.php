<?php

namespace pvc\interfaces\struct\types\value;

interface ValTesterInterface
{
    public function testValue(mixed $value) : bool;
}