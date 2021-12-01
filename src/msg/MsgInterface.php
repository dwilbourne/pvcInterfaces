<?php declare(strict_types = 1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg;

use pvc\displayable\DisplayableInterface;

/**
 * Interface MsgInterface
 */
interface MsgInterface extends DisplayableInterface
{
    /**
     * outputMsgVars
     * @param bool $outputYn
     *
     * controls whether variables containing data should be displayed when the message is displayed.
     * Usually user messages should not contain data, error messages (which users do not see) should
     * contain data (for debugging purposes)
     */
    public function outputMsgVars(bool $outputYn): void;
}
