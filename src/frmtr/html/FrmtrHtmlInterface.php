<?php

namespace pvc\interfaces\frmtr\html;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\html\dom\DomNodeInterface;

/**
 * @extends FrmtrInterface<DomNodeInterface>
 */
interface FrmtrHtmlInterface extends FrmtrInterface
{
    /**
     * format
     * @param DomNodeInterface $value
     * @return string
     */
    public function format($value): string;

}