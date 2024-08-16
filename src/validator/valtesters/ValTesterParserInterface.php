<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\validator\valtesters;

use pvc\interfaces\parser\ParserInterface;
use pvc\interfaces\validator\ValTesterInterface;

/**
 * Class ValTesterParserInterface
 * all parsers take a string as an argument type
 * @extends ValTesterInterface<string>
 */
interface ValTesterParserInterface extends ValTesterInterface
{
    /**
     * setParser
     * @param ParserInterface $parser
     */
    public function setParser(ParserInterface $parser): void;

    /**
     * getParser
     * @return ParserInterface
     */
    public function getParser(): ParserInterface;
}
