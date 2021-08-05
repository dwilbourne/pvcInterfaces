<?php declare(strict_types = 1);

namespace pvc\parser;

use pvc\msg\MsgRetrievalInterface;

/**
 * Interface ParserInterface
 * @package pvc\parser
 */
interface ParserInterface
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
    
    /**
     * @function getErrmsg
     * @return MsgRetrievalInterface|null
     */
    public function getErrmsg(): ?MsgRetrievalInterface;
}
