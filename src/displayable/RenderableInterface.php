<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\displayable;

/**
 * Class RenderableInterface
 */
interface RenderableInterface
{
    /**
     * makeHtml
     * @return string
     */
    public function render(): string;
}
