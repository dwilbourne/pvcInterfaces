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
     * returns a base 10 mask giving information like the package, the severity, whether
     * to retry the operation, etc.
     */
    public function metaData(): int;
}
