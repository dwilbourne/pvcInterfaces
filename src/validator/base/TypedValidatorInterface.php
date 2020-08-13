<?php
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

namespace pvc\validator\base;


/**
 * Class TypedValidatorInterface
 * @package pvc\validator\base
 */
interface TypedValidatorInterface extends ValidatorInterface
{
    public function setFrmtr($frmtr) : void;
}