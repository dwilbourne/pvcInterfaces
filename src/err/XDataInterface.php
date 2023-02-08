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
     * @function getNamespace
     * @return string
     */
    public function getNamespace() : string;

    /**
     * @function getDirectory
     * @return string
     */
    public function getDirectory() : string;

    /**
     * @function getLocalXCodes
     * @return array<class-string, int>
     */
    public function getLocalXCodes() : array;

    /**
     * @function getLocalXCode
     * @param class-string $classString
     * @return int
     */
    public function getLocalXCode(string $classString) : int;

    /**
     * @function getLocalXMessages
     * @return array<class-string, string>
     */
    public function getLocalXMessages() : array;

    /**
     * @function getLocalXMessage
     * @param class-string $classString
     * @return string
     */
    public function getLocalXMessage(string $classString) : string;
}