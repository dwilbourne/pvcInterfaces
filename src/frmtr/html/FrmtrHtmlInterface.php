<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\html;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\html\dom\DomTreeInterface;
use pvc\interfaces\html\element\ElementInterface;

/**
 * Class FrmtrHtmlInterface
 *
 * @extends FrmtrInterface<ElementInterface>
 */
interface FrmtrHtmlInterface extends FrmtrInterface
{
    /**
     * format
     *
     * @param  DomTreeInterface $value
     *
     * @return string
     */
    public function format($value): string;

}
