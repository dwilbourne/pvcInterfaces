<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\html;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\html\tag\TagInterface;
use pvc\interfaces\html\tag\TagVoidInterface;

/**
 * Class FrmtrHtmlInterface
 * @extends FrmtrInterface<TagInterface|TagVoidInterface>
 */
interface FrmtrHtmlInterface extends FrmtrInterface
{
    /**
     * format
     * @param TagInterface|TagVoidInterface $value
     * @return string
     */
    public function format($value): string;
}
