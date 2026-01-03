<?php

namespace pvc\interfaces\factory;

/**
 * @template Type
 */
interface FactoryInterface
{
    /**
     * create
     * @return Type
     */
    public function create();
}