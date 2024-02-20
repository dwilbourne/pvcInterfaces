<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class AttributeVoidInterface
 */
interface AttributeVoidInterface extends AttributeInterface
{
    /**
     * setUsage
     * @param bool $usage
     */
    public function setUsage(bool $usage): void;

    /**
     * getUsage
     * @return bool
     */
    public function getUsage(): bool;
}