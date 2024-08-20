<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr\html;

use pvc\interfaces\frmtr\FrmtrInterface;
use pvc\interfaces\frmtr\msg\FrmtrMsgInterface;
use pvc\interfaces\html\tag\TagInterface;
use pvc\interfaces\html\tag\TagVoidInterface;
use pvc\interfaces\intl\LocaleInterface;

/**
 * Class FrmtrHtmlInterface
 * @template AttributeValueType
 * @extends FrmtrInterface<TagInterface|TagVoidInterface<AttributeValueType>>
 */
interface FrmtrHtmlInterface extends FrmtrInterface
{
    /**
     * format
     * @param TagInterface<AttributeValueType>|TagVoidInterface<AttributeValueType> $value
     * @return string
     */
    public function format($value): string;

    /**
     * setMsgFrmtr
     * @param FrmtrMsgInterface $frmtrMsg
     */
    public function setMsgFrmtr(FrmtrMsgInterface $frmtrMsg): void;

    /**
     * getMsgFrmtr
     * @return FrmtrMsgInterface
     */
    public function getMsgFrmtr(): FrmtrMsgInterface;

    /**
     * setLocale
     * @param LocaleInterface $locale
     */
    public function setLocale(LocaleInterface $locale): void;

    /**
     * getLocale
     * @return LocaleInterface
     */
    public function getLocale(): LocaleInterface;
}
