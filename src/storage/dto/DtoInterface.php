<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\storage\dto;

/**
 * Class DtoInterface
 */
interface DtoInterface
{
    /**
     * hydrate
     * @param array<string, mixed> $array
     * @return mixed
     */
    public function hydrate(array $array);

    /**
     * toArray
     * @return array<string, mixed>
     */
    public function toArray(): array;
}