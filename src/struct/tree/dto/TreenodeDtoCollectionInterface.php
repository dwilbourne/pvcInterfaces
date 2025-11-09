<?php

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\dto;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * @template NodeIdType of array-key
 */
interface TreenodeDtoCollectionInterface
{
    /**
     * findElementKeys
     * @param  ValTesterInterface<NodeIdType>  $valTester
     *
     * @return array<NodeIdType>
     */
    public function findElementKeys(ValTesterInterface $valTester): array;
}