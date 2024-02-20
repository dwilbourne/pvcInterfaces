<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\tag;

use pvc\interfaces\displayable\DisplayableInterface;

/**
 * Class TagInterface
 */
interface TagInterface extends DisplayableInterface
{
    public function display(): string;
}
