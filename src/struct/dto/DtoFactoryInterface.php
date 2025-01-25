<?php

namespace pvc\interfaces\struct\dto;

/**
 * @template DtoType
 * @template EntityType
 */
interface DtoFactoryInterface
{
    /**
     * @param array<mixed> $values
     * @return DtoType
     */
    public function makeDtoFromArray(array $values): mixed;

    /**
     * @param EntityType $entity
     * @return DtoType
     */
    public function makeDtoFromEntity(mixed $entity): mixed;

    /**
     * @param mixed $entity
     * @return array<mixed>
     */
    public function makeArrayFromEntity(mixed $entity): array;
}