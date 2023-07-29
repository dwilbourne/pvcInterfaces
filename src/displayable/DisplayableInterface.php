<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\displayable;

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
