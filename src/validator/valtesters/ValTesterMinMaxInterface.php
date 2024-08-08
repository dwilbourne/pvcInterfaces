<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator\valtesters;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterMinMaxInterface
 * @template DataType
 * @extends ValTesterInterface<DataType>
 */
interface ValTesterMinMaxInterface extends ValTesterInterface
{
    /**
     * setmin
     * @param DataType $min
     */
    public function setmin($min): void;

    /**
     * getmin
     * @return DataType mixed
     */
    public function getmin(): mixed;

    /**
     * setMax
     * @param DataType $max
     */
    public function setMax($max): void;

    /**
     * getMax
     * @return DataType mixed
     */
    public function getMax(): mixed;
}
