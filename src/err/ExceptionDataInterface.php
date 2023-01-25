<?php

/**
 * @package pvcErr
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvc\interfaces\err;

interface ExceptionDataInterface
{
    /**
     * getNamespace
     * @return string
     */
    public function getNamespace() : string;

    /**
     * getLocalCodes
     * @return array<class-string, int>
     */
    public function getLocalCodes() : array;

    /**
     * getLocalCode
     * @param class-string $classString
     * @return int
     */
    public function getLocalCode(string $classString) : int;

    /**
     * getLocalMessages
     * @return array<class-string, string>
     */
    public function getLocalMessages() : array;

    /**
     * getLocalMessage
     * @param class-string $classString
     * @return string
     */
    public function getLocalMessage(string $classString) : string;
}