<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\regex;

/**
 * Class RegexFactoryInterface
 */
interface RegexFactoryInterface
{
    /**
     * makeRegex
     * @return RegexInterface
     */
    public function makeRegex(): RegexInterface;
}
