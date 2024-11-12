<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions\classes;

/**
 * Class AttributeDefInterface
 */
interface AttributeDefInterface extends DefinitionInterface
{
    /**
     * getName
     * @return string
     */
    public function getName(): string;

    /**
     * getValtester
     * @return class-string
     */
    public function getValtester(): string;

    /**
     * isCaseSensitive
     * @return bool
     */
    public function isCaseSensitive(): bool;

    /**
     * isGlobal
     * @return bool
     */
    public function isGlobal(): bool;
}
