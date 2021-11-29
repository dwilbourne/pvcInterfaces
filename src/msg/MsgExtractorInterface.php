<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg;

interface MsgExtractorInterface
{
    /**
     * extract
     * @param int $msgId
     * @return string
     */
    public function extract(int $msgId): string;
}