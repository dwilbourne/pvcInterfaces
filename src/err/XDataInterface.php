<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\err;

/**
 * Interface XDataInterface is the interface for all Exception Data (XData) Classes.
 *
 * Concrete XData classes are always child classes the XDataAbstract class, which implements most of the code needed to
 * support this interface.  Concrete classes need to implement only the two abstract methods in XDataAbstract:
 * getLocalXCodes and getMessageTemplates.
 */
interface XDataInterface
{
    /**
     * @function getLocalXCodes returns an array of exception codes.
     *
     * The key for each code is the class string of the exception to which the code corresponds.
     *
     * @return array<class-string, int>
     */
    public function getLocalXCodes(): array;

    /**
     * @function getLocalXCode returns the exception code for a particular exception.
     * @param class-string $classString
     * @return int
     */
    public function getLocalXCode(string $classString): int;

    /**
     * @function getXMessageTemplates returns an array of exception message templates.
     *
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
     * @function getXMessageVariables returns an array (possibly empty) of the variables in a message template.
     *
     * @param string $messageTemplate
     * @return array<int, string>
     */
    public function getXMessageVariables(string $messageTemplate): array;
}