<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg;

interface HasMsgInterface
{
        public function getMsg() :? MsgInterface;

}