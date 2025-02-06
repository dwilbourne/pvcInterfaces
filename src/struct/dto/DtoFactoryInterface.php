<?php
declare(strict_types=1);

namespace pvc\interfaces\struct\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
 * @template EntityType
 */
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
     * @return DtoInterface<PayloadType>
     */
    public function makeDto(): DtoInterface;

    /**
     * @param array<mixed> $values
     * @return DtoInterface<PayloadType>
     */
    public function hydrateDtoFromArray(array $values): DtoInterface;

    /**
     * @param EntityType $entity
     * @return DtoInterface<PayloadType>
     */
    public function hydrateDtoFromEntity(mixed $entity): DtoInterface;

    /**
     * @param mixed $entity
     * @return array<mixed>
     */
    public function makeArrayFromEntity(mixed $entity): array;
}