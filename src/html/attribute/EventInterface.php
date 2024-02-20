<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\html\attribute;

/**
 * Class EventInterface
 */
interface EventInterface extends AttributeInterface
{
    /**
     * setScript
     * @param string $script
     * @return mixed
     */
    public function setScript(string $script);

    /**
     * getScript
     * @return string|null
     */
    public function getScript(): ?string;
}