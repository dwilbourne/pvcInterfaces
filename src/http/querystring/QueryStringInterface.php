<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http\querystring;

use pvc\interfaces\frmtr\array\FrmtrArrayInterface;

/**
 * Class QueryStringInterface
 *
 * almost the same as 'is_scalar' but includes null
 * @phpstan-type QstrParamValue string|int|float|bool|null
 */
interface QueryStringInterface
{
    /**
     * setSeparator
     * @param  string  $separator
     * @return void
     */
    public function setSeparator(string $separator): void;

    /**
     * setQueryEncoding
     * the older standard is PHP_RFC1738 and the newer standard is PHP_RFC986
     * @param int $encoding
     */
    public function setQueryEncoding(int $encoding): void;

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
     * addArrayTransformer
     * @param  ArrayTransformerInterface  $transformer
     * @return void
     * adds a transformer.  Transformers are sequentially applied to the
     * parameters before destructuring the array.
     */
    public function addArrayTransformer(ArrayTransformerInterface $transformer): void;

    /**
     * setArrayFrmtr
     * @param  FrmtrArrayInterface  $arrayFrmtr
     * there are several ways that arrays can be destructured into a string
     * @return void
     */
    public function setArrayFrmtr(FrmtrArrayInterface $arrayFrmtr): void;

    /**
     * parse
     * @param  string  $queryString
     * @return void
     */
    public function parse(string $queryString): void;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
