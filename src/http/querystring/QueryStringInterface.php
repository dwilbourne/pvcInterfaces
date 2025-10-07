<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\querystring;

use pvc\interfaces\frmtr\array\FrmtrArrayInterface;
use pvc\interfaces\frmtr\bool\FrmtrBooleanInterface;

/**
 * Class QueryStringInterface
 */
interface QueryStringInterface
{
    /**
     * setParams
     * @param array<string, mixed> $params
     */
    public function setParams(array $params): void;

    /**
     * setParam
     * @param string $varName
     * @param mixed $value
     */
    public function setParam(string $varName, $value): void;

    /**
     * getParams
     * @return array<string, mixed>
     */
    public function getParams(): array;

    /**
     * setQueryEncoding
     * the older standard is PHP_RFC1738 and the newer standard is PHP_RFC986
     * @param int $encoding
     */
    public function setQueryEncoding(int $encoding): void;

    /**
     * parse
     * @param  string  $queryString
     * @return void
     */
    public function parse(string $queryString): void;

    /**
     * setBoolFrmtr
     * @param  FrmtrBooleanInterface  $boolFrmtr
     * choose how you want your boolean values formatted
     * @return void
     */
    public function setBoolFrmtr(FrmtrBooleanInterface $boolFrmtr): void;

    /**
     * setArrayFrmtr
     * @param  FrmtrArrayInterface  $arrayFrmtr
     * there are several ways that arrays can be formatted in a querystring...
     * @return void
     */
    public function setArrayFrmtr(FrmtrArrayInterface $arrayFrmtr): void;

    /**
     * setSeparator
     * @param  string  $separator
     *
     * @return void
     */
    public function setSeparator(string $separator): void;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
