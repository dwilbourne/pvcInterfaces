<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\types\id;

interface IdTesterInterface
{
    public function setIdType(IdType $idType): void;

    public function testIdType(mixed $id) : bool;
}