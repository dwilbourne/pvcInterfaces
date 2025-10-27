<?php

namespace pvc\interfaces\struct\tree\dto;

/**
 * @template NodeId
 * @template TreeId
 */
interface TreenodeDtoFactoryInterface
{
    /**
     * makeTreenodeDto
     * @param  array<mixed>  $array
     *
     * @return TreenodeDtoInterface<NodeId, TreeId>
     */
    public function makeTreenodeDto(array $array): TreenodeDtoInterface;
}