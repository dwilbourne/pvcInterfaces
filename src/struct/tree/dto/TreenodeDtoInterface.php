<?php

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\struct\dto\DtoInterface;
use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 * @extends DtoInterface<PayloadType>
 */
interface TreenodeDtoInterface extends DtoInterface
{
    public function getNodeId(): int;
    public function getParentId(): ?int;
    public function getTreeId(): ?int;
    public function getPayload(): mixed;
    public function getIndex(): int;
}