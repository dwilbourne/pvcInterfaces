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
     * getGetTextMsgIds
     * @param int $msgId
     * @return array|string[]
     */
    public function getGetTextMsgIds(int $msgId): array;

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