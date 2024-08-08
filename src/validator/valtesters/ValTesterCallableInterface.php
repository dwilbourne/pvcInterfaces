<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator\valtesters;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterCallableInterface extends ValTesterInterface
 * @template DataType
 * @extends ValTesterInterface<DataType>
 */
interface ValTesterCallableInterface extends ValTesterInterface
{
    /**
     * setCallable
     * @param callable $callable
     */
    public function setCallable(callable $callable): void;

    /**
     * getCallable
     * @return callable
     */
    public function getCallable(): callable;
}
