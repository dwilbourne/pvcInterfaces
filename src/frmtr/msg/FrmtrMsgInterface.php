<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\msg;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\msg\DomainCatalogInterface;
use pvc\interfaces\msg\MsgInterface;

/**
 * Interface FrmtrMsgInterface
 * @extends FrmtrInterface<MsgInterface>
 */
interface FrmtrMsgInterface extends FrmtrInterface
{
    /**
     * setDomainCatalog
     * @param DomainCatalogInterface $catalog
     */
    public function setDomainCatalog(DomainCatalogInterface $catalog): void;

    /**
     * format
     * @param MsgInterface $msg
     * @return string
     */
    public function format($msg): string;
}
