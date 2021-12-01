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
     * this method should be used when the message does not have plural forms
     */
    public function extract(int $msgId): string;

    /**
     * extractPlural
     * @param int $msgId
     * @param int $itemCount
     * @return string
     * this method should be used when the messages has plural forms.
     */
    public function extractPlural(int $msgId, int $itemCount): string;
}
