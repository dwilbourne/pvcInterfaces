<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\frmtr;

use pvc\interfaces\intl\LocaleInterface;

/**
 * Interface FrmtrInterface
 * @template DataType
 * @extends FrmtrSysInterface<DataType>
 */
interface FrmtrInterface extends FrmtrSysInterface
{
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
