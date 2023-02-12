<?php

/**
 * @package pvcErr
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvc\interfaces\err;

interface XDataInterface
{
    /**
     * @function getXCodes
     * @return array<class-string, int>
     */
    public function getXCodes() : array;

    /**
     * @function getXCode
     * @param class-string $classString
     * @return int
     */
    public function getXCode(string $classString) : int;

    /**
     * @function getXMessages
     * @return array<class-string, string>
     */
    public function getXMessages() : array;

    /**
     * @function getXMessage
     * @param class-string $classString
     * @return string
     */
    public function getXMessage(string $classString) : string;
}