<?php declare(strict_types = 1);

namespace pvc\parser;

use pvc\msg\HasMsgInterface;

/**
 * Interface ParserInterface
 * @package pvc\parser
 */
interface ParserInterface extends HasMsgInterface
{
    /**
     * @function parse
     * @param string $data
     * @return bool
     */
    public function parse(string $data): bool;

    /**
     * @function getParsedValue
     * @return mixed
     */
    public function getParsedValue();

}
