<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\validator\val_tester;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterMinMaxInterface
 * @template DataType
 * @extends ValTesterInterface<DataType>
 */
interface ValTesterMinMaxInterface extends ValTesterInterface
{

    /**
     * setMin
     * @param DataType $min
     */
    public function setMin(mixed $min): void;

    /**
     * getMin
     * @return mixed
     */
    public function getMin(): mixed;

    /**
     * setMax
     * @param DataType $max
     */
    public function setMax(mixed $max): void;

    /**
     * getMax
     * @return DataType
     */
    public function getMax(): mixed;

}
