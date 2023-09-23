<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\html;

/**
 * Class AttributeInterface
 */
interface AttributeInterface
{
    public function render(): string;
}