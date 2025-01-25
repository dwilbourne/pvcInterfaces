<?php

namespace pvc\interfaces\struct\dto;

/**
 * @template DtoType
 * @template EntityType
 */
interface DtoFactoryAbstractInterface
{
    /**
     * @param string $dtoPropertyName
     * @param string $entityGetterMethodName
     * @param string $arrayKeyName
     * @return void
     */
    public function setPropertyMap(
        string $dtoPropertyName,
        string $entityGetterMethodName,
        string $arrayKeyName,
    ): void;

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