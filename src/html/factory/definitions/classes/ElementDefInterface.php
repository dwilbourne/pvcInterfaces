<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\factory\definitions\classes;

/**
 * Class ElementDefinterface
 */
interface ElementDefInterface extends DefinitionInterface
{
    public function getName(): string;

    /**
     * getAllowedAttributeDefIds
     * @return array<string>
     */
    public function getAllowedAttributeDefIds(): array;

    /**
     * getAllowedChildDefIds
     * @return array<string>
     */
    public function getAllowedChildDefIds(): array;
}
