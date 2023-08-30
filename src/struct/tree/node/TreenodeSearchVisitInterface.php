<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

/**
 * Class TreenodeVistedInterface
 */
interface TreenodeSearchVisitInterface
{
    public function getVisitCount(): int;

    public function addVisit(): void;

    public function clearVisitCount(): void;
}
