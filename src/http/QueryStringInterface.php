<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\http;

use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class QueryStringInterface
 */
interface QueryStringInterface
{
    /**
     * getQuerystringParamNameTester
     * @return ValTesterInterface<string>|null
     */
    public function getQuerystringParamNameTester(): ?ValTesterInterface;

    /**
     * setQuerystringParamNameTester
     * @param ValTesterInterface<string> $querystringParamNameTester
     */
    public function setQuerystringParamNameTester(ValTesterInterface $querystringParamNameTester): void;

    /**
     * setParams
     * @param array<string, string> $params
     */
    public function setParams(array $params): void;

    /**
     * addParam
     * @param string $varName
     * @param string $value
     */
    public function addParam(string $varName, string $value): void;

    /**
     * getParams
     * @return array<string, string>
     */
    public function getParams(): array;

    /**
     * setQueryEncoding
     * @param int $encoding
     */
    public function setQueryEncoding(int $encoding): void;

    /**
     * getQueryEncoding
     * @return int
     */
    public function getQueryEncoding(): int;

    /**
     * render
     * @return string
     */
    public function render(): string;
}
