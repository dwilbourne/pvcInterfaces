<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg\extractors\gettext;

interface GetTextConfigInterface
{
    public function getGetTextMsgId(int $msgId): string;

    public function getTextDomain(): string;

    public function getTextDomainDirectory(): string;
}