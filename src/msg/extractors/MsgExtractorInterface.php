<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 *
 * The methods here mimic the verbs in the gettext package but this abstraction allows
 * extensibility to use other mechanisms for messages translation (e.g. relational db, etc).
 */

namespace pvc\msg\extractors;

interface MsgExtractorInterface
{
    /**
     * extract
     * @param int $msgId
     * @return string
     */
    public function extract(int $msgId, int $itemCount = 0): string;

}
