<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg\extractors\gettext;

/**
 * Interface GetTextConfigInterface
 */
interface GetTextConfigInterface
{
    /**
     * getGetTextMsgId
     * @param int $msgId
     * @return string
     */
    public function getGetTextMsgId(int $msgId): string;

    /**
     * getTextDomain
     * @return string
     */
    public function getTextDomain(): string;

    /**
     * getTextDomainDirectory
     * @return string
     */
    public function getTextDomainDirectory(): string;
}