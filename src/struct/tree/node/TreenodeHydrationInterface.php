<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;

/**
 * Interface TreenodeExtendedInterface adds methods to TreenodeBaseInterface.
 *
 * It provides methods necessary to hydrate itself with nodeid, parentid and
 * optionally a treeid from an external data source.  Once hydrated, it can
 * then be added into the tree.
 *
 * @see CollectionInterface
 */
interface TreenodeHydrationInterface
{
    /**
     * hydration methods
     */

    /**
     * hydrate sets properties in the node using an external data source
     * @param TreenodeDtoInterface $dto
     */
    public function hydrate(TreenodeDtoInterface $dto): void;


    /**
     * @return non-negative-int|null
     * used only in the course of hydrating a tree from an external data source.
     * The tree needs to be able to get the parentId so it can verify that
     * the parent already exists in the tree.
     */
    public function getParentId(): ?int;
}
