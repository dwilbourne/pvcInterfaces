<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions\classes;

/**
 * Class OtherDefInterface
 */
interface OtherDefInterface extends DefinitionInterface
{
    /**
     * getArg
     * @return class-string|null
     */
    public function getArg(): ?string;

    /**
     * isShared
     * @return bool
     */
    public function isShared(): bool;
}
