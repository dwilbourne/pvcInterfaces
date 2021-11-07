<?php declare(strict_types = 1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg;

/**
 * Interface MsgInterface
 */
interface MsgInterface
{
    /**
     * getMsgVars
     * @return string[]
     */
    public function getMsgVars() : array;

    /**
     * getMsgText
     * @return string
     */
    public function getMsgText(): string;
}
