<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\mimetype;

/**
 * Class MimeTypeFactoryInterface
 */
interface MimeTypeFactoryInterface
{
    /**
     * makeMimeType
     * @return MimeTypeInterface
     */
    public function makeMimeType(): MimeTypeInterface;
}
