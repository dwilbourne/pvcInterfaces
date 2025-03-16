<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\dto;

interface DtoFactoryInterface
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
     * @param array<mixed>|object $source
     * @return DtoInterface
     */
    public function makeDto(array|object $source): DtoInterface;

    /**
     * @param object $entity
     * @return array<mixed>
     */
    public function makeArrayFromEntity(object $entity): array;
}
