<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\err;

use Throwable;

/**
 * Interface XFactoryInterface
 */
interface XFactoryInterface
{
    /**
     * @function createException
     * @param string $exceptionClassString
     * @param array<mixed> $params
     * @param Throwable|null $prev
     * @return Throwable
     */
	public function createException(string $exceptionClassString, array $params = [], Throwable $prev = null) : Throwable;
}
