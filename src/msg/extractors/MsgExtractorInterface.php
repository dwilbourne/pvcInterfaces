<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg\extractors;

interface MsgExtractorInterface
{
    /**
     * extract
     * @param int $msgId
     * @param bool $plural
     * @return string
     */
    public function extract(int $msgId, bool $plural = false): string;
}
