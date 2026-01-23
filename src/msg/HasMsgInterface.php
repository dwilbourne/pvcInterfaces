<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\msg;

/**
 * HasMsgInterface defines the operations that objects must implement when they contain a Msg object.
 */
interface HasMsgInterface
{
    /**
     * getMsg
     * @return ?MsgInterface
     */
    public function getMsg(): ?MsgInterface;

    /**
     * @return DomainCatalogLoaderInterface
     */
    public function getDomainCatalogLoader(): DomainCatalogLoaderInterface;
}
