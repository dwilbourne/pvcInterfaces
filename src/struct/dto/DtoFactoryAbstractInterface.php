<?php
declare(strict_types=1);

namespace pvc\interfaces\struct\dto;

use pvc\interfaces\struct\payload\HasPayloadInterface;

/**
 * @template PayloadType of HasPayloadInterface
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
     * @param mixed $source
     * @return DtoInterface<PayloadType>
     */
    public function makeDto(mixed $source): DtoInterface;

    /**
     * @param mixed $entity
     * @return array<mixed>
     */
    public function makeArrayFromEntity(mixed $entity): array;
}