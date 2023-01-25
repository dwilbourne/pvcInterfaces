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
     * getLocalCodes
     * @return array<class-string, int>
     */
    public function getLocalCodes() : array;

    /**
     * getLocalMessages
     * @return array<class-string, string>
     */
    public function getLocalMessages() : array;
}