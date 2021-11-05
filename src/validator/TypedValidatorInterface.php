<?php
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @version 1.0
 */

namespace pvc\validator;


/**
 * Class TypedValidatorInterface
 * @package pvc\validator\base
 */
interface TypedValidatorInterface extends ValidatorInterface
{
    public function setFrmtr($frmtr) : void;
}