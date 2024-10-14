<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\search;

enum VisitStatus: int
{
    case NEVER_VISITED = 0;
    case PARTIALLY_VISITED = 1;
    case FULLY_VISITED = 2;
}
