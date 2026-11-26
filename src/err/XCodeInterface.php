<?php

namespace pvc\interfaces\err;

interface XCodeInterface
{
    /**
     * by convention, codes are prefixed with the composer vendor name, package name, and, optionally,
     * a subpackage name prior to the numeric portion of the text.
     *
     * An example would be pvc_frmtr_0001
     */
    public function code(): string;

    /**
     * Returns a template like "Gateway {gateway:%s} timed out after {ms:%d} ms (fee: {fee:%.2f}).
     */
    public function messageTemplate(): string;

    /**
     * returns a string obtained from the Packages enum (located in pvcErr) corresponding to the package of the class that implements
     * this interface.
     */
    public function Package(): string;

    /**
     * returns a string obtained from the Severities enum (located in pvcErr) corresponding to the severity of the error.
     */
    public function Severity(): string;

    /**
     * returns a string obtained from the ExceptionTypes enum (located in pvcErr) corresponding to the type of exception.
     */
    public function ExceptionType(): string;
}
