<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\err;

/**
 * Interface XDataInterface is the interface for all Exception Data (XData) Classes.
 *
 * Concrete XMsgs classes are always child classes the XMsgAbstract class, which implements most of the code needed to
 * support this interface.  Concrete classes need to implement only the one abstract method in XMsgAbstract:
 * getMessageTemplates.
 */
interface XDataInterface
{
    /**
     * The key for each template is the class string of the exception to which the message template belongs.  Messages
     * can be parameterized with variables that can be populated with data available at runtime.  See the Discussion
     * section of http://pvcerr.readthedocs.io/en/latest for a full explanation of the syntax and usage.
     *
     * @return array<class-string, string>
     */
    public function getXMessageTemplates(): array;

    /**
     * @function getXMessageTemplate returns the message template corresponding to a particular exception.
     * @param class-string $classString
     * @return string
     */
    public function getXMessageTemplate(string $classString): string;

    /**
     * @param string $messageTemplate
     * @return array<int, XMsgVarInterface>
     */
    public function getXMsgVariables(string $messageTemplate): array;
}