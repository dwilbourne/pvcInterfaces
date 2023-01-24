<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\err;

use Throwable;

/**
 * Interface ExceptionFactoryInterface
 */
interface ExceptionFactoryInterface
{
    /**
     * createException
     * @param string $exceptionClassString
     * @param array $params
     * @param Throwable|null $prev
     * @return Throwable
     */
	public static function createException(string $exceptionClassString,
                                    array $params = [],
                                    Throwable $prev = null
    ) : Throwable;
}
