<?php declare(strict_types = 1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\msg;

use Symfony\Contracts\Translation\TranslatableInterface;

/**
 * Interface MsgInterface.  Private-label the Symfony Translatable interface.  Messages must implement the following
 * method: trans(Translatorinterface $translator, string $locale).
 */
interface MsgInterface extends TranslatableInterface
{
}
