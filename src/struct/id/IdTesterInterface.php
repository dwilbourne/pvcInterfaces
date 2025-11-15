<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\id;

interface IdTesterInterface
{
    public function testIdType($id) : bool;
}