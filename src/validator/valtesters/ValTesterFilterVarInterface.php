<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator\valtesters;

use pvc\interfaces\filtervar\FilterVarInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterFilterVarInterface
 * @template DataType
 * @extends ValTesterInterface<DataType> FilterVarInterface
 */
interface ValTesterFilterVarInterface extends ValTesterInterface, FilterVarInterface
{
    public function setFilterVar(FilterVarInterface $filterVar): void;

    public function getFilterVar(): FilterVarInterface;
}
