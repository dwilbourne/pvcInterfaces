<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http;

use pvc\interfaces\frmtr\array\FrmtrArrayInterface;
use pvc\interfaces\frmtr\bool\FrmtrBooleanInterface;
use pvc\interfaces\frmtr\null\FrmtrNullInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class QueryStringInterface
 */
interface QueryStringInterface
{
    /**
     * setParamNameTester
     * There is no standard for parameter names, so the interface provides
     * a mechanism to restrict your parameter names however you choose. See
     * the implementation in the pvc/http library for more details.
     * @param ValTesterInterface<string>  $paramNameTester
     */
    public function setParamNameTester(ValTesterInterface $paramNameTester): void;

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
     * setBoolFormatter
     * @param  FrmtrBooleanInterface  $boolFormatter
     * choose how you want your boolean values formatted
     * @return void
     */
    public function setBoolFormatter(FrmtrBooleanInterface $boolFormatter): void;

    /**
     * setNullFormatter
     * @param  FrmtrNullInterface  $nullFormatter
     * you have a couple of choices in how you want to format a parameter with
     * a null value
     * @return void
     */
    public function setNullFormatter(FrmtrNullInterface $nullFormatter): void;

    /**
     * setArrayFormatter
     * @param  FrmtrArrayInterface  $arrayFormatter
     * there are several ways that arrays can be formatted in a querystring...
     * @return void
     */
    public function setArrayFormatter(FrmtrArrayInterface $arrayFormatter): void;

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
