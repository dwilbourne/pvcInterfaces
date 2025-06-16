<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class EventInterface
 * @extends AttributeInterface<string>
 */
interface EventInterface extends AttributeInterface
{
    /**
     * setScript
     * @param string $script
     */
    public function setScript(string $script): void;

    /**
     * getScript
     * @return ?string
     */
    public function getScript(): ?string;
}
