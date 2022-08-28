<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\displayable;


/**
 * Class DisplayableInterface
 */
interface DisplayableInterface
{
    /**
     * display
     * @return string
     */
    public function display(): string;
}