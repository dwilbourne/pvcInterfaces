<?php

namespace pvc\interfaces\frmtr\html;

use pvc\interfaces\frmtr\FrmtrGenericInterface;
use pvc\interfaces\html\dom\DomNodeInterface;

/**
 * @extends FrmtrGenericInterface<DomNodeInterface>
 */
interface FrmtrHtmlGenericInterface extends FrmtrGenericInterface
{
    /**
     * format
     * @param DomNodeInterface $value
     * @return string
     */
    public function format($value): string;

}