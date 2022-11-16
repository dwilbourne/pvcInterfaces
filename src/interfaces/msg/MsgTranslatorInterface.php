<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\interfaces\msg;

interface MsgTranslatorInterface
{
    /**
     * trans
     * @param string $messageId
     * @param mixed[] $parameters
     * @return string
     */
    public function trans(string $messageId, array $parameters): string;
}